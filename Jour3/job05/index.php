<?php 
function occurrences($str, $char) {
    $count = 0;
    $length = 0;

    while (isset($str[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }

    return $count;
}

echo occurrences("aberrant", "b");
?>
