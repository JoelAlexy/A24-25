<?php
function anoBisiesto($ano){
    if($ano%4===0 && $ano%100!==0){
        echo 'el año '.$ano .' es un año bisiesto';
    }elseif($ano%100===0 && $ano%400===0){
        echo 'el año '.$ano .' es un año bisiesto';
    }else{
        echo 'el año '.$ano .' no es un año bisiesto';
    }
}



?>
<center>
<form action="" method="post" style="display:flex; flex-flow:column;">
    <label for="">Introduce un añopara verificar si es bisiesto</label>
    <br>
    <input type="number" name="numero" id="numero">
    <br>
<input type="submit" name="enviar" id="enviar" value="enviar">
</form>
<?php
if(isset($_POST['enviar'])){
    anoBisiesto($_POST['numero']);
}


?>
</center>