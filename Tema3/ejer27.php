<?php
$numero=1234567890;
function sumaDigi($num){
$valores=str_split((string)$num);
$result=0;
foreach ($valores as $key => $value) {
 $result+=$value ;
}
return $result;
}
$suma=sumaDigi($numero);
echo  "la suma de los digitos de $numero es : $suma ";


?>