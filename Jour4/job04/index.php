<?php
session_start(); 

if (isset($_POST['login'])) {
    $_COOKIE['name'] = $_POST["name"];
} 
if (isset($_POST['logout'])){
    unset($_COOKIE["logout"]);
} 
if(isset($_POST["name"])){
    echo '<form method="post">
              <button type"submit" name="logout">logout</button>
          </form>';
}
if(!isset($_POST["name"])){
    echo '<form method="post">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name">
    <button type="submit" name="login">login</button>
</form>';
}
?>



