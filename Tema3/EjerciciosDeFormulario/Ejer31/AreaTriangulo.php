<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['base']) && !empty($_POST['base']) && $_POST['base'] > 0) {
        $base = $_POST['base'];
    } else {
        $errores['base']='Campo Base incorrecto';
    }
    if (
        isset($_POST['altura']) && !empty($_POST['altura']) && $_POST['altura'] > 0) 
        {
        $altura = $_POST['altura'];
    } else {
        $errores['altura']='Campo Altura incorrecto';
    }
    if(!empty($errores)){
        foreach ($errores as $value) {
            echo "<h3 style=color:red;>$value</h3>";
        }
    }else{
        $resultado=($base*$altura)/2;
       echo ' <center><h1 class="respuesta">El area del triangulo de :<br>Base :'.$base.' <br>Altura :'.$altura.'<br> Es :'.$resultado.'</h1> </center>';
    }
}


?>
<style>
    form{
        display: flex;
        flex-flow: column;
        justify-content: center;
        align-items: center;
    }
    .respuesta{
        color:green;
        font-size: large;
        border-radius: 50%;
        border: solid 5px;
    }
</style>
<form  action="<?php echo $_SERVER['php_self']; ?>" method="post">
    <label for="base">Introduce la base del triangulo</label>
    <input type="number" name="base" id="base">
    <label for="base">Introduce la altura del triangulo</label>
    <input type="number" name="altura" id="altura">
    <input type="submit" name="submit" value="Calcular Area">
</form>