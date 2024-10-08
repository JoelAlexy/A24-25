<?php
function obtenerFechaEnCastellano() {
    // Configuración de la localización a español
    setlocale(LC_TIME, 'es_ES.UTF-8'); // Asegúrate de que esta configuración es compatible con tu servidor

    // Obtener la fecha actual
    $fechaActual = strftime("%A, %d de %B de %Y");
    
    return $fechaActual;
}
echo obtenerFechaEnCastellano();
?>
