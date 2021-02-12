<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaControlador extends Controller
{
    public function index(){
        if (Auth::check()){
            $user = Auth::user();
            dd($user);
            echo $user;
        }else{
            echo "Estou apaixonado loucamente ";
            echo "por uma lambisgoia que só tem dois dente";
        }

    }
}
