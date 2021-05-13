<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Plan extends Controller
{
    public function index()
    {
        $mode_paiement = DB::select('select * from mode_paiement');
        return view('pages.plan', ['mode' => $mode_paiement]);
    }

    public function getPlace(Request $request)
    {
        $id = $request->input('id');
        $place = DB::select("SELECT chaise.num_place as num_place,chaise.num_chaise as num_chaise, acheter.num_chaise as existe FROM chaise LEFT OUTER JOIN acheter ON chaise.num_chaise = acheter.num_chaise, tables WHERE (tables.id_table = chaise.id_table) AND (tables.nom = '$id')");
        echo json_encode($place);
    }
    public function getAcheter(Request $request)
    {
        $num_chaise = $request->input('num_chaise');
        $acheter = DB::select("select * from acheter, personne where (acheter.id_personne = personne.id_personne) AND (acheter.num_chaise = $num_chaise)");
        echo json_encode($acheter);
    }

    public function insert(Request $request)
    {
        $nom = str_replace("'", "\'", $request->input('nom'));
        $email = str_replace("'", "\'", $request->input('email'));
        $tel = $request->input('tel');
        $adresse = str_replace("'", "\'", $request->input('adresse'));
        $num_billet = $request->input('num_billet');
        $num_chaise = $request->input('num_chaise');
        if(strpos($num_billet, 'E') > 0){
            $id_acheter = substr($num_billet, 0, strpos($num_billet, 'E'));
        }else{
            $id_acheter = intval($num_billet)+50;
        }
        $existe = DB::select("select * from personne where (nom = '$nom') AND (email = '$email') AND (tel = '$tel') AND (adresse = '$adresse')");
        if(count($existe) > 0){
            $id = $existe[0]->id_personne;
        }else{
            $client = DB::insert("insert into personne (nom, email, tel, adresse) values ('$nom', '$email', '$tel', '$adresse')");
            $id = DB::select("select * from personne where (nom = '$nom') AND (email = '$email') AND (tel = '$tel') AND (adresse = '$adresse')")[0]->id_personne;
        }
        if(isset($id)){
            $acheter = DB::insert("INSERT INTO `acheter`(`id_acheter`, `num_billet`, `id_personne`, `num_chaise`, `token`, `created_at`) VALUES ($id_acheter,'$num_billet',$id,$num_chaise,'".md5($id_acheter)."',CURRENT_TIMESTAMP())");
        }
        echo json_encode($id_acheter);
    }

    public function insertPaiement(Request $request)
    {
        $id_type = $request->input('id_type');
        $montant = $request->input('montant');
        $id_acheter = $request->input('id_acheter');
        echo json_encode(DB::insert("INSERT INTO avoir (id_acheter, id_type, montant) VALUES ($id_acheter, $id_type, $montant)"));
    }
}
