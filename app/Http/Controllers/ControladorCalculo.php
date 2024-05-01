<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CalculadoraService;
class ControladorCalculo extends Controller
{
    private string $operacion;
    private int $numero1;
    private int $numero2;
   /*public function calcular($operacion, $numero1, $numero2)
    {
        $resultado = 0;
    
        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'division':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Error: No se puede dividir por cero.";
                }
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'porcentaje':
                $resultado = ($numero1 * $numero2) / 100;
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }
    
        return response()->json(['resultado' => $resultado]);
    }*/
    private CalculadoraService $calculadoraService;
    public function __construct($operacion,$numero1,$numero2)
    {
        $this->operacion=$operacion;
        $this->numero1=$numero1;
        $this->numero2=$numero2;

        $this->calculadoraService =new CalculadoraService($operacion,$numero1,$numero2);
    }
    public function calcular($operacion, $numero1, $numero2){
        $resultado = $this->calculadoraService->calcular($operacion, $numero1, $numero2);
        return response()->json(['resultado' => $resultado]);
    }
}
