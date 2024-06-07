<?php
session_start();

if (!isset($_COOKIE['nbVisites'])) {
    $nbVisites = 0;
} else {
    $nbVisites = $_COOKIE['nbVisites'];
}

if (isset($_POST['reset'])) {
    $nbVisites = 0;
} else {
    $nbVisites++;
}

header("Set-Cookie: nbVisites=$nbVisites; max-age=86400");
?>

<p>Nombre de visites: <?php echo $nbVisites; ?></p>
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
