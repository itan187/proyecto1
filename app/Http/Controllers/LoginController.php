<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    public function login(Request $req){
        
        $username = $req->input('username');
        $password = $req->input('password');
        //echo $username."---".$password;
        $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
        if(count($checkLogin) >0){
            //echo "Login Correcto";
          //  return view('uploads');
          return redirect('/upload');
        }else{
            echo "Login no correcto falla en el password ";
        }
    }
}
