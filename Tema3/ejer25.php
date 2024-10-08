<?php
function obtenerFechaEnCastellano()
{
    setlocale(LC_TIME, 'es_ES.UTF-8'); // Configuración para español
    $fechaActual = strftime("%A, %d de %B de %Y");
    return $fechaActual;
}

function validarFecha($dia, $mes, $anio)
{
    // Verificar si el año es un número válido
    if (!is_numeric($anio) || !is_numeric($mes) || !is_numeric($dia)) {
        return false;
    }

    // Comprobar que el mes está entre 1 y 12
    if ($mes < 1 || $mes > 12) {
        return false;
    }

    // Comprobar que el día está dentro de los límites del mes y del año
    return checkdate($mes, $dia, $anio);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckDate</title>
</head>

<body>
    <style>
        form{
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
        }
        .correcto{
            color: green;
        }
        .incorrecto{
            color: red;
        }
    </style>
    <center>
    <h1>Introduce una fecha </h1>
    </center>

    <form action="" method="post">
        Introduce el dia
        <input type="number" name="dia" id="dia">
        Introduce el mes
        <input type="number" name="mes" id="mes">
        Introduce el año

        <input type="number" name="anho" id="anho">

        <input type="submit" id="comprobar"value="comprobar">
    <?php 
    if(isset($_POST['dia']) && isset($_POST['mes'])&&isset($_POST['anho'])&&!empty($_POST['dia'])&&!empty($_POST['mes'])&&!empty($_POST['anho'])){

    $dia=$_POST['dia'];
    $mes=$_POST['mes'];
    $anho=$_POST['anho'];
    $fecha=validarFecha($dia,$mes,$anho);
    echo $fecha;
    ?>  <h1 class="<?php echo $fecha ? 'correcto' :'incorrecto'; ?>">
<?php echo $fecha ? "$dia/$mes/$anho =>Es una fecha" :"$dia/$mes/$anho =>No es una fecha"; ?>
</h1><?php
    }
 
 
 
 ?>   </form>

</body>

</html>