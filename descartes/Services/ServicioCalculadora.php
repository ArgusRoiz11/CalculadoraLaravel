<?php

namespace app\Services;

class ServicioCalculadora
{
    public function calcular($operacion, $numero1, $numero2)
    {
        switch ($operacion) {
            case 'suma':
                return $this->suma($numero1, $numero2);
            case 'resta':
                return $this->resta($numero1, $numero2);
            case 'division':
                return $this->division($numero1, $numero2);
            case 'multiplicacion':
                return $this->multiplicacion($numero1, $numero2);
            case 'porcentaje':
                return $this->porcentaje($numero1, $numero2);
            default:
                return "Operacion no valida";
        }
    }

    private function suma($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }

    private function resta($numero1, $numero2)
    {
        return $numero1 - $numero2;
    }

    private function division($numero1, $numero2)
    {
        if ($numero2 != 0) {
            return $numero1 / $numero2;
        } else {
            return "Error: No se puede dividir por cero.";
        }
    }

    private function multiplicacion($numero1, $numero2)
    {
        return $numero1 * $numero2;
    }

    private function porcentaje($numero1, $numero2)
    {
        return ($numero1 * $numero2) / 100;
    }
}
