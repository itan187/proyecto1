<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InicioController extends Controller
{
    //
    public function inicio(){
        return view('inicio');
    }
}
