<?php

function piramideNumeros($n)
{
    $n = sqrt($n);

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
}

if (isset($_POST['crearPiramide'])) {

    if (isset($_POST['numero']) && !empty($_POST['numero']) && $_POST['numero'] > 0) {


        piramideNumeros($_POST['numero']);
        echo '!(Solo se muestran los x numeros inmediatamente anteriores al numero indicado con el cual se forma una piramide casi perfecta)';
    } else {
    }
}
?>
<center>
    <form action="<?php echo $_SERVER['PHP_SELF'];   ?>" method="POST">
        <h1>Introduce el numero de numeros que quieres que tenga la piramide</h1>
        <input type="number" name="numero" id="numero">
        <input type="submit" name="crearPiramide" value="crearPiramide">
    </form>
</center>