<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Services\ServicioCalculadora;

class ControladorCalculo extends Controller
{
    private $calculadoraServicio;

    public function __construct(ServicioCalculadora $calculadoraServicio)
    {
        $this->calculadoraServicio = $calculadoraServicio;
    }

    public function calcular($operacion, $numero1, $numero2)
    {
        $resultado = $this->calculadoraServicio->calcular($operacion, $numero1, $numero2);

        return response()->json(['resultado' => $resultado]);
    }
}
