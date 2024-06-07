<?php
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>test</title>
    </head>
    <body>
        <main>
            <form action="./traitement.php" method="POST">
                <div>
                    <label for="username">Username :</label>
                    <input type="text" id="username" name="username"/>
                </div>
                <div>
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password"/>
                </div>
                <div>
                    <button type="submit">Send</button>
                </div>
            </form>
        </main>
    </body>
</html>