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
            for($i = 0; $i < 10; $i++) {
                echo "<span> i == $i </span>,";
            }

            echo "<hr>";
            $omg = array(1,2,3,4,5);

            for($i = 0; $i < 5; $i++) {
                echo "<span> $omg[$i] </span>";
            }

            foreach($omg as $n) {
                echo "<br> $n";
            }
        ?>
    </body>
</html>