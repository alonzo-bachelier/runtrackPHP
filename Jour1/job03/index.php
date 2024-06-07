<?php
$kawasaki = ["moto ", "1000Sx ", 14399 . "€"];
$toyota = ["voiture ", "supra ", 57600 . "€" ];

$for_each_kawasaki = "";
$for_each_toyota = "";

foreach($kawasaki as $value){
    $for_each_kawasaki .= "<td>$value</td>";
} 
foreach($toyota as $value){
    $for_each_toyota .= "<td>$value</td>";
}

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr><?=$for_each_kawasaki?></tr>
               <tr><?=$for_each_toyota?></tr> 
            </tbody>
        </table>
    </body>
</html>