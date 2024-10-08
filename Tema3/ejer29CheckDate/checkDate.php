<?php
function esBisiesto($anho)
{
    if ($anho % 4 === 0 && !$anho % 100 === 0) {
        return true;
    } elseif ($anho % 4 === 0 && $anho % 100 === 0 && $anho % 400 === 0) {
        return true;
    } else {
        return false;
    }
}
function comprobarmes($mes, $anho)
{
    if ($mes > 0 || $mes < 12) {
        switch ($mes) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
                break;
            case 2:
                return esBisiesto($anho) ? 29 : 28;
                break;

            default:
                return 30;
                break;
        }
    } else {
        return false;
    }
}
function comprobarFecha($dia, $mes, $anho)
{
    $result=false;
    if ($dia > 0 && $dia <= 31) {
        $dias = comprobarmes($mes, $anho);
        if ($dia <= $dias) {
            $result= true;
        } 
    }
    return $result;
}
