<?php 

$range = range(0,100);

$numbers = "";

foreach($range as $value){

    if ($value < 21 ){
        $numbers .= '<p style="font-style: italic;">' .$value. '</p><br>';
    }elseif ($value == 42){
        $numbers .= '<p style="color:blue;">LaPlateforme</p><br>';
    }
    elseif($value >= 25 && $value <=50){
        $numbers .= '<p style="text-decoration:underline;">' .$value. '</p><br>';
    }else {
         $numbers .= "<p> $value </p><br>";
        };
       
   
    
};


?>
<div><?=$numbers?></div>