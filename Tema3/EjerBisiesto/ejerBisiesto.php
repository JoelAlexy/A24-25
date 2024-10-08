<?php
function escaner()
{
    echo "Introduce un texto: ";
    $entrada = fgets(STDIN); // Leer la entrada estándar
    return trim($entrada); // Eliminar espacios en blanco al principio y al final
}
function bisiesto($anho)
{
    if ($anho % 4 === 0 && !$anho % 100 === 0) {
        return true;
    } elseif ($anho % 4 === 0 && $anho % 100 === 0 && $anho % 400 === 0) {
        return true;
    } else {
        return  false;
    }
}

// Usar el escáner
$input = escaner();
if(is_numeric($input)){
    if(bisiesto($input)){
        echo "el año es bisiesto";
    }else{
    echo "El año no es bisiesto";
    }
}