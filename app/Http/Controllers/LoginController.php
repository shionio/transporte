<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function login(Request $request){
        DB::enableQueryLog();
        // dd($_POST);
        $nombre = $_POST['usuario'];
        $clave = $_POST['clave'];

        $c = DB::table('usuario')
        ->where(['usuario' => $nombre])
        ->first();

        if ($c != null){
            if($c->password === $_POST['clave'] && $c->status == 1){
                echo('Ususario Valido');
            }else{
                dd('clave Errada Verificar');
            }
        }

    }
}
