<?php
// Incluir el fichero que contiene la función
include 'ejer23.php';

// Llamar a la función para obtener la fecha
$fechaEnCastellano = obtenerFechaEnCastellano();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha en Castellano</title>
</head>
<body>
    <h1>Fecha Actual</h1>
    <p><?php echo $fechaEnCastellano; ?></p>
</body>
</html>
