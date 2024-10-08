<?php
if (isset($_POST['Enviar'])) {
    if (isset($_POST['Nombre']) && !empty($_POST['Nombre'])) {
        $Nombre = $_POST['Nombre'];
    } else {
        $errores['Nombre'] = 'El nombre esta mal-->>Verificalo';
    }
    if (isset($_POST['Edad']) && !empty($_POST['Edad'])) {
        $Edad = $_POST['Edad'];
    } else {
        $errores['Edad'] = 'El Edad esta mal-->>Verificalo';
    }

    if (isset($errores)) {
        foreach ($errores as $key => $value) {
            echo $value . '<br>';
        }
        include('./formulario.html');
    }else{
        echo "<b>Nombre :$Nombre <br>Edad : $Edad </b>";
    }
}
