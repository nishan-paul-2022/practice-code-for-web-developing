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
            $d = Date("H");
            if( $d <=10 )
                echo "GOOD MORNING <br>";
            elseif( $d <= 18)
                echo "GOOD DAY <br>";
            else
                echo "GOOD NIGHT <br>";
        ?>
    </body>
</html>