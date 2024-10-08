<?php
$num=153;
function esArmstrong($numero)
{
    //N=xdigitos y la suma de x^xdigitos=N
    $numeros = str_split((string)$numero);
    $result = 0;
    foreach ($numeros as $value) {
        $result += pow($value, count($numeros));
    }

    return $numero == $result ? true : false;
}
if (esArmstrong($num)) {
    echo "$num es un número Armstrong.";
} else {
    echo "$num no es un número Armstrong.";
}
