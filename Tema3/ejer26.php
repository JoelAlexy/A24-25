<?php
echo 3%41;

function replica($dividendo,$divisor){
    while($dividendo>0 && $dividendo>=$divisor){
        $dividendo-=$divisor;
    }
    return $dividendo;
}

echo '<br>'.replica(3,41);


?>