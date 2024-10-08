<?php
for ($i = 1; $i <= 10; $i++) {
    $linea = ''; // Reiniciar la línea para cada fila
    for ($j = 1; $j <= 10; $j++) {
        $linea .= ($i * $j) . "\t"; // Usar tabulaciones para separar los números
    }
    echo $linea . '<br>'; // Mostrar la línea de multiplicación
}
?>
