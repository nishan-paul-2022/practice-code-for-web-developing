<?php
    session_start();

    echo session_id()."<br>";
    echo $_COOKIE["PHPSESSID"]."<br>";

    echo count( $_SESSION )."<br>";
    
    print_r($_SESSION);

    session_unset();
    session_destroy();
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
        <?php
            if( count($_SESSION) > 0 )
                echo "<h2> SESSION ACTIVE </h2>";
            else
                echo "<h2> SESSION DEACTIVE </h2>";

            echo session_id()."<br>";
            echo $_COOKIE["PHPSESSID"]."<br>";

            print_r($_SESSION);
        ?>
    </body>
</html>