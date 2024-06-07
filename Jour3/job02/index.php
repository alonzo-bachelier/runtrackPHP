<?php
function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }
    if($jour == false){
        echo "Bonsoir";
    }
   
}
bonjour(true);
bonjour(false);

?>