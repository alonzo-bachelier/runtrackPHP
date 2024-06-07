<?php
$function = $_GET['function'];
$str = $_GET["str"];

function gras($str) {
    $upper_alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $length = 0;

    while (isset($str[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        $is_upper = false;

        for ($j = 0; isset($upper_alphabet[$j]); $j++) {
            if ($str[$i] == $upper_alphabet[$j]) {
                $is_upper = true;
                break;
            }
        }

        if ($is_upper) {
            echo "<b>" . $str[$i] . "</b>";
        } else {
            echo $str[$i];
        }
    }
}

if ($function == 'gras') {
    gras($str);
}
// } elseif ($function == 'césar') {
   
// } elseif ($function == 'plateforme') {

// } else {
//     echo $str;
// }

?>
