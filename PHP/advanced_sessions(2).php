<?php
    session_start();
    unset( $_SESSION["velocity"] );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <button> <a href="advanced_sessions(3).php" style="text-decoration:none;"> DESTROY </a> </button>
        <?php
            if( isset( $_SESSION["velocity"] ) ) {
                echo $_SESSION["velocity"];
            } else{
                echo "<h1> unset </h1>";
            }
        ?>
    </body>
</html>