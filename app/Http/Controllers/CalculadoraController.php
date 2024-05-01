<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index(){
        return "Bienvenido a la Calculadora";
    }

    public function create(){
        return "En esta página puedes realizar cuentas matematicas sencillas";
    }
    public function show($operacion){
        return "Vamos a realizar la operacion de:$operacion";
    }
}
