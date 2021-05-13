<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function verifier(Request $request)
    {
        $username = $request->input('username');
        $mdp = md5($request->input('pass'));
        $user = DB::select("SELECT * FROM user WHERE (username = '$username') AND (password = '$mdp')");
        if(count($user) == 1){
            echo json_encode($user[0]->id_user);
        }else{
            echo json_encode(false);
        }
    }
}
