<?php
function calcule($a, $operator, $b){
    if ($operator == "+"){
       echo $a + $b;
    }elseif ($operator == "-"){
       echo $a - $b;
    }elseif ($operator == "*"){
       echo $a * $b;
    }elseif ($operator == "/"){
       echo $a / $b;
    }
}

calcule(2,"*", 3)

?>