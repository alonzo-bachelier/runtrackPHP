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
                    <label for="first-name">First name :</label>
                    <input type="text" id="first-name" name="first-name"/>
                </div>
                <div>
                    <label for="last-name">Last name :</label>
                    <input type="text" id="last-name" name="last-name"/>
                </div>
                <div>
                    <button type="submit">envoyé</button>
                </div>
            </form>
        </main>
    </body>
</html>