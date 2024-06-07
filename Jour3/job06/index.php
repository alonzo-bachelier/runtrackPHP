<?php 
function leetSpeak($str){
$length = 0;

while (isset($str[$length])) {
    $length++;
}
for ($i = 0; $i < $length; $i++) {
    if ($str[$i] == "A") {
        $str[$i] = "4";
    }
    if ($str[$i] == "B") {
        $str[$i] = "8";
    }
    if ($str[$i] == "E") {
        $str[$i] = "3";
    }
    if ($str[$i] == "G") {
        $str[$i] = "6";
    }
    if ($str[$i] == "L") {
        $str[$i] = "1";
    }
    if ($str[$i] == "S") {
        $str[$i] = "5";
    }
    if ($str[$i] == "T") {
        $str[$i] = "7";
    }
}
return $str;
}
echo leetSpeak("TEST DE LA FONCTION")

?>