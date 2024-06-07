<?php
$disable = "";

session_start();
if (isset($_POST["restart"])){
    session_destroy();
    session_start();
    $_SESSION['board'] = ['?', '?', '?', '?', '?', '?', '?', '?', '?'];
    $_SESSION['turn'] = 'X';
}

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = ['?', '?', '?', '?', '?', '?', '?', '?', '?'];
    $_SESSION['turn'] = 'X';
}

if (isset($_POST['box0'])) $_SESSION['board'][0] = $_SESSION['turn'];
if (isset($_POST['box1'])) $_SESSION['board'][1] = $_SESSION['turn'];
if (isset($_POST['box2'])) $_SESSION['board'][2] = $_SESSION['turn'];
if (isset($_POST['box3'])) $_SESSION['board'][3] = $_SESSION['turn'];
if (isset($_POST['box4'])) $_SESSION['board'][4] = $_SESSION['turn'];
if (isset($_POST['box5'])) $_SESSION['board'][5] = $_SESSION['turn'];
if (isset($_POST['box6'])) $_SESSION['board'][6] = $_SESSION['turn'];
if (isset($_POST['box7'])) $_SESSION['board'][7] = $_SESSION['turn'];
if (isset($_POST['box8'])) $_SESSION['board'][8] = $_SESSION['turn'];

function check_winner($board, $player) {
    // Horizontal lines
    if (($board[0] == $player && $board[1] == $player && $board[2] == $player) ||
        ($board[3] == $player && $board[4] == $player && $board[5] == $player) ||
        ($board[6] == $player && $board[7] == $player && $board[8] == $player)) {
        return true;
    }

    // Vertical lines
    if (($board[0] == $player && $board[3] == $player && $board[6] == $player) ||
        ($board[1] == $player && $board[4] == $player && $board[7] == $player) ||
        ($board[2] == $player && $board[5] == $player && $board[8] == $player)) {
        return true;
    }

    // Diagonal lines
    if (($board[0] == $player && $board[4] == $player && $board[8] == $player) ||
        ($board[2] == $player && $board[4] == $player && $board[6] == $player)) {
        return true;
    }

    return false;
}


if (isset($_POST['box0']) || isset($_POST['box1']) || isset($_POST['box2']) || isset($_POST['box3']) || isset($_POST['box4']) || isset($_POST['box5']) || isset($_POST['box6']) || isset($_POST['box7']) || isset($_POST['box8'])) {
    $_SESSION['turn'] = ($_SESSION['turn'] == 'X') ? 'O' : 'X';
    if (check_winner($_SESSION['board'], $_SESSION['turn'])) {
        echo $_SESSION['turn'] . " a gagné!";
        $disable = "disabled"; 
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <style>
        body {
            background-color : #d5bdaf;
        }
        form{
            margin-top:50vh;
            transform: translateY(-50%);         
        }
        table {
            border-collapse: collapse;
            width: 300px;
            height: 300px;
            margin-left:50%;
            transform: translateX(-50%);
        }
        td {
            border: 0px solid black;
            width: 33.33%;
            height: 33.33%;
            text-align: center;
            font-size: 24px;
        }
        .case {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
        }
        .restart-btn{
            width: 300px;
            margin-top:20px;
            margin-left:50%;
            transform: translateX(-50%);
            background-color: #e3d5ca;
            border-radius:8px;
        }
    </style>
</head>
<body>
    <form action="./index.php" method="POST">
        <table>
            <tr>
                <td><button <?=$disable?> style="border-bottom:1px solid black; border-right:1px solid black;" class="case" type="submit" name="box0"><?= $_SESSION['board'][0] ?></button></td>
                <td><button <?=$disable?> style="border-bottom:1px solid black; border-right:1px solid black;" class="case" type="submit" name="box1"><?= $_SESSION['board'][1] ?></button></td>
                <td><button <?=$disable?> style="border-bottom:1px solid black;" class="case" type="submit" name="box2"><?= $_SESSION['board'][2] ?></button></td>
            </tr>
            <tr>
                <td><button <?=$disable?> style="border-bottom:1px solid black; border-right:1px solid black;" class="case" type="submit" name="box3"><?= $_SESSION['board'][3] ?></button></td>
                <td><button <?=$disable?> style="border-bottom:1px solid black; border-right:1px solid black;" class="case" type="submit" name="box4"><?= $_SESSION['board'][4] ?></button></td>
                <td><button <?=$disable?> style="border-bottom:1px solid black;" class="case" type="submit" name="box5"><?= $_SESSION['board'][5] ?></button></td>
            </tr>
            <tr>
                <td><button <?=$disable?> style="border-right:1px solid black;" class="case" type="submit" name="box6"><?= $_SESSION['board'][6] ?></button></td>
                <td><button <?=$disable?> style="border-right:1px solid black;" class="case" type="submit" name="box7"><?= $_SESSION['board'][7] ?></button></td>
                <td><button <?=$disable?> class="case" type="submit" name="box8"><?= $_SESSION['board'][8] ?></button></td>
            </tr>
        </table>
        <button type="submit" name="restart" class="restart-btn">Restart</button>
    </form>
</body>
</html>

