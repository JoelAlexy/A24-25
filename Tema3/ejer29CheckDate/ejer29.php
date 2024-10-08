<?php
include_once ("./checkDate.php");
if(isset($_POST['comprobar'])){
    if(isset($_POST['dia'])&&!empty($_POST['dia'])){
$dia=$_POST['dia'];
    }else{
        $errorFecha=true;
    }
    if(isset($_POST['Mes'])&&!empty($_POST['Mes'])){
        $mes=$_POST['Mes'];
    }else{
        $errorFecha=true;
    }
    if(isset($_POST['anho'])&&!empty($_POST['anho'])){
        $anho=$_POST['anho'];
    }else{
        $errorFecha=true;
    }
    if(!isset($errorFecha)){

        if(comprobarFecha($dia,$mes,$anho)){
            echo "<h1 style=color:green;> la fecha $dia/$mes/$anho es una fecha correcta </h1>";
        }else{
            echo "<h1 style=color:red;> la fecha $dia/$mes/$anho NO es una fecha correcta </h1>";

        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body{display: flex;
        flex-flow: column;
    justify-content: center;
align-items: center;
}
    </style>
    <form action="" method="post">
        <h1>Introduce el Dia</h1>
        <br>
        <input type="number" name="dia" id="dia">
        <h1>Introduce el Mes</h1>
        <br>
        <input type="number" name="Mes" id="Mes">
        <h1>Introduce el Año</h1>
        <br>
        <input type="number" name="anho" id="anho">
        <br>
        <input type="submit" name="comprobar" id="comprobar" value="comprobar">

    </form>

    
</body>

</html>