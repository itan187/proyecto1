<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //bienvenida al usuario

    public function index($name,$nickname = null){

        $name= ucfirst($name);

        if($nickname){
                return "Bienvenido {$name}, tu usuario es {$nickname}";
                }else{
                    return "Bienvenido {$name}";
                }
             }
}
