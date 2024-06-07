<?php
function calcule($a , $operator, $b){
    if($operator == "+"){
       return  $a + $b;
    }elseif($operator == "-"){
        return  $a - $b;
    }elseif($operator == "*"){
        return $a * $b;
    }elseif($operator == "/"){
        return $a / $b;
    }elseif($operator == "%"){
        return $a % $b;
    }
   
};

echo calcule(9, "*", 6);

?>