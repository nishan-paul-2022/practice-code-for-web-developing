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
            // arithmetic operator
            $x = 10; $y = 3;
            echo ($x**$y)."<br>";

            // string operators
            $a = "HELLO "; $b = "WORLD";
            echo $a.$b."<br>";

            // comparison operator
            $p = 7; $q = "7";
            var_dump($p == $q); echo "<br>";

            $p = 7; $q = "7";
            var_dump($p === $q); echo "<br>";

            // logical operator
            $x = 100; $y = 50;
            if ($x == 100 xor $y == 80) {
                echo "Hello world! <br>";
            }

            // array operators
            $m = array(1,2,3);
            $n = array("1",2,3);
            var_dump($m == $n); echo "<br>";
            var_dump($m === $n); echo "<br>";

            $r = array(0 => 'a', 'x' => 1, 1.1 => 3.14);
            $s = array('a' => 1, 'b' => 2, 'c' => 3);
            $t = $r + $s;
            echo implode(" ", $t)."<br>";
        ?>
    </body>
</html>