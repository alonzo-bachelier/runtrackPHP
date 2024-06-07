<?php
session_start(); 

if (isset($_POST['send'])) {
    $_SESSION['Name'] = $_POST["name"];
} 
?>
<form method="post">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name">
    <button type="submit" name="send">Send</button>
</form>
<p>result : <?=$_SESSION['Name']?></p>
