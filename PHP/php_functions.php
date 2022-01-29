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
            function f() {
                echo "HELLO WORLD <br>";
            }
            f();

            function g($x) {
                echo "THE NUMBER IS $x <br>";
            }
            g(123);

            function h($x=0, $y=0) {
                echo "$x + $y == ".($x + $y)."<br>";
            }
            h(378, 678);
            h(777, 566);
        ?>
    </body>
</html>