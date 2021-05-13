<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;

class Acheter extends Controller
{
    public function index()
    {
        $mode = DB::select("SELECT * FROM mode_paiement");
        $acheter = DB::select("SELECT nom, type, sum(montant) as montant FROM acheter, personne, mode_paiement, avoir WHERE (acheter.id_personne = personne.id_personne) AND (mode_paiement.id_type = avoir.id_type) AND (acheter.id_acheter = avoir.id_acheter) GROUP BY mode_paiement.type,personne.nom");
        return view('pages.modepaiement', ['paiement' => $mode, 'acheter' => $acheter]);
    }

    public function getListe(Request $request)
    {
        $id = $request->input('type');
        if(strlen($id) > 1){
            $acheter = DB::select("SELECT nom, type, sum(montant) as montant FROM acheter, personne, mode_paiement, avoir WHERE (acheter.id_personne = personne.id_personne) AND (mode_paiement.id_type = avoir.id_type) AND (acheter.id_acheter = avoir.id_acheter) GROUP BY mode_paiement.type,personne.nom");
        }else{
            $acheter = DB::select("SELECT nom, type, sum(montant) as montant FROM acheter, personne, mode_paiement, avoir WHERE (acheter.id_personne = personne.id_personne) AND (mode_paiement.id_type = avoir.id_type) AND (acheter.id_acheter = avoir.id_acheter) AND (mode_paiement.id_type = $id) GROUP BY mode_paiement.type,personne.nom");
        }
        echo json_encode($acheter);
    }

    public function getTotal()
    {
        $total = DB::select("SELECT sum(montant) AS total FROM avoir, mode_paiement WHERE (avoir.id_type = mode_paiement.id_type)");
        $a_credit = DB::select("SELECT sum(montant) AS a_credit FROM avoir, mode_paiement WHERE (avoir.id_type = mode_paiement.id_type) AND ((mode_paiement.type = 'A crédit') OR (mode_paiement.type = 'CPT DIRECTION'))");
        $array = array(
            'ca' => $total[0]->total,
            'a_credit' => $a_credit[0]->a_credit,
            'comptant' => $total[0]->total-$a_credit[0]->a_credit
        );
        return view('pages.balance', $array);
    }

    public function imprimer(Request $request)
    {
        $id = $request->input('type');
        $mode = DB::select("SELECT type FROM mode_paiement WHERE id_type = $id");
        if(strlen($id) > 1){
            $acheter = DB::select("SELECT nom, type, sum(montant) as montant FROM acheter, personne, mode_paiement, avoir WHERE (acheter.id_personne = personne.id_personne) AND (mode_paiement.id_type = avoir.id_type) AND (acheter.id_acheter = avoir.id_acheter) GROUP BY mode_paiement.type,personne.nom");
        }else{
            $acheter = DB::select("SELECT nom, type, sum(montant) as montant FROM acheter, personne, mode_paiement, avoir WHERE (acheter.id_personne = personne.id_personne) AND (mode_paiement.id_type = avoir.id_type) AND (acheter.id_acheter = avoir.id_acheter) AND (mode_paiement.id_type = $id) GROUP BY mode_paiement.type,personne.nom");
        }
        $mpdf = new Mpdf(['format' => 'A4']);
        $html = view('pages.liste', ['client' => $acheter, "mode" => $mode[0]->type])->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function update(Request $request)
    {
        $text = $request->input('contenu');
        $value = array();
        foreach ($this->separer($text, ',') as $key) {
            array_push($value, $key);
        }
        $id = $value[0];
        $personne = DB::select("SELECT nom FROM acheter, personne WHERE (personne.id_personne = acheter.id_personne) AND (id_acheter = $id)");
        $nom = $personne[0]->nom;
        $scanned = DB::select("SELECT * FROM acheter WHERE (id_acheter = $id) AND (scanned = 1)");
        if(count($scanned) > 0){
            echo json_encode(array(
                'status' => 'warning',
                'msg' => 'Désolé, '.$nom.'! Votre billet est déjà scanné'
            ));
        }else{
            $query = DB::update("UPDATE acheter SET scanned = 1 WHERE id_acheter = $id");
            if($query){
                echo json_encode(array(
                    'status' => 'success',
                    'msg' => $nom.', vous pouvez entrer'
                ));
            }else{
                echo json_encode(array(
                    'status' => 'warning',
                    'msg' => 'Erreur du scan! Veuillez contacter l\'administrateur'
                ));
            }
        }
    }
    function separer($caractere, $recherche)
    {
        $positioncar = array();
        $accessoire = array();
        for ($i = 0; $i < strlen($caractere); $i++) {
            if (substr($caractere, $i, 1) == $recherche) {
                array_push($positioncar, $i);
            }
        }
        if (count($positioncar) > 0) {
            for ($j = 0; $j < count($positioncar) + 1; $j++) {
                if ($j == 0) {
                    array_push($accessoire, ucfirst(trim(substr($caractere, 0, $positioncar[$j]))));
                } elseif ($j == count($positioncar)) {
                    array_push($accessoire, ucfirst(trim(substr($caractere, $positioncar[$j - 1] + 1, strlen($caractere) - $positioncar[$j - 1]))));
                } else {
                    array_push($accessoire, ucfirst(trim(substr($caractere, $positioncar[$j - 1] + 1, $positioncar[$j] - $positioncar[$j - 1] - 1))));
                }
            }
        } else {
            array_push($accessoire, ucfirst(trim($caractere)));
        }
        return $accessoire;
    }

    public function compter_client()
    {
        $client = DB::select("SELECT count(*) as nombre FROM acheter");
        $arrive = DB::select("SELECT count(*) as nombre FROM acheter WHERE (scanned = 1)");
        return view('pages.occupation', ['total' => $client[0]->nombre, 'arrive' => $arrive[0]->nombre]);
    }
  	public function ando()
    {
        $mode = DB::select("SELECT * FROM mode_paiement");
      	foreach($mode as $key){
        	$total = DB::select("SELECT sum(montant) as total FROM avoir WHERE (id_type = ".$key->id_type.")");
         	$output[] = array(
              'type' => $key->type,
              'total' => $total[0]->total
           	);
        }
      	$enfant = DB::select("SELECT count(*) as nombre FROM acheter WHERE (id_acheter < 51)");
      	$adulte = DB::select("SELECT count(*) as nombre FROM acheter WHERE (id_acheter >= 51)");
      	$data = array(
          'ca' => $output,
          'adulte' => $adulte[0]->nombre,
          'enfant' => $enfant[0]->nombre
        );
        return view('balance', $data);
    }
}
