<?php 

$range = range(0,1337);

$numbers = "";

foreach($range as $value){
    if ($value == 26 || $value == 37 || $value == 88 || $value == 1111){
       $value = null;
    }else {$numbers .= "<p>$value</p> <br>";}
    
};


?>
<div><?=$numbers?></div>