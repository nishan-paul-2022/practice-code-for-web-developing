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
            $x = 75; $y = 25;
            function addition() {
                $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y']; // since 'omg' is a variable present within the $GLOBALS array, it is also accessible from outside the function
                // echo $sum."<br>"; // not legal
            }
            addition();
            echo $sum."<br>";
          
            echo 'PHP_SELF: '.$_SERVER['PHP_SELF']."<br>"; // Returns the filename of the currently executing script
            echo 'SCRIPT_NAME: '.$_SERVER['SCRIPT_NAME']."<br>"; // Returns the path of the current script
            echo 'SERVER_NAME: '.$_SERVER['SERVER_NAME']."<br>"; // Returns the name of the host server
            echo 'SERVER_PORT: '.$_SERVER['SERVER_PORT']."<br>"; // Returns the port on the server machine being used by the web server for communication
            echo 'HTTP_HOST: '.$_SERVER['HTTP_HOST']."<br>"; // Returns the Host header from the current request
            echo 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."<br>";
        ?>

        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="fname" placeholder="name">
            <input type="submit" name="ENTER">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST["fname"]; 
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo "<h2>".$name."</h2>";
                }
            }
        ?>
    </body>
</html>
<!-- $_GET -->
<!-- $_POST -->
<!-- $_REQUEST -->
<!-- $_REQUEST variable contains the contents of both $_GET, $_POST, $_COOKIE -->