<?php 

$range = range(1,100);

$numbers = "";

foreach($range as $value){

    if ($value % 3 == 0 && $value % 5 == 0){
        $numbers .= '<p style="color:orange;">FizzBuzz</p><br>';
    }elseif ($value % 5 == 0){
        $numbers .= '<p style="color:violet;">Buzz</p><br>';
    }
    elseif($value % 3 == 0){
        $numbers .= '<p style="color:blue;">Fizz</p><br>';
    }else {
         $numbers .= "<p> $value </p><br>";
        };
       
};


?>
<div><?=$numbers?></div>