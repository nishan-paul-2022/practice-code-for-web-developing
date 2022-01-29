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
            echo __LINE__ . "<br>"; // current line number of the file
            echo __FILE__ . "<br>"; // full path and filename of the file
            echo __DIR__ . "<br>"; // directory of the current file
            function f() {
                echo __FUNCTION__ . "<br>"; // parent function name
            }
            f();
            class G {
                public function __construct() {
                    echo __CLASS__ . "<br>"; // parent class name
                    echo __METHOD__ . "<br>"; // parent method name
                }
            }
            new G();
        ?>
    </body>
</html>