<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function principal(){
        return view('principal');
    }
    public static function form() {
        var_dump($_GET); 
        return view('form', ['titulo' => 'Form (teste)']);
    }
}