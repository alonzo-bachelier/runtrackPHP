<?php
session_start(); 

if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    $_SESSION['nbVisites']++;
}
?>

<p>Nombre de visites: <?php echo $_SESSION['nbVisites']; ?></p>
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

