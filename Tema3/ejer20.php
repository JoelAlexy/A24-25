<?php
do {
    $tirada=rand(1,6);
    echo $tirada . '<br>';
$cont++;
} while ($tirada != 6);
echo "Se ha necesitado $cont tiradas del Dado para sacar un 6";
?>