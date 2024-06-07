<?php 

$range = range(0,1337);

$numbers = "";

foreach($range as $value){
    if ($value != 42){
         $numbers .= "<p>$value</p> <br>";
    };
   
    if ($value == 42){
        $numbers .= '<p style="text-decoration: underline;
        font-weight: bold;">' .$value. '</p><br>';
    };
    
};


?>
<div><?=$numbers?></div>