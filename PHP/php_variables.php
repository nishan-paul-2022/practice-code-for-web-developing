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
            $flag = true;
            $pi = 3.1416;
            $str = "Jon Snow";
            echo "$flag";
            echo "<p> is the value $pi </p>";
            echo " we love ". $str. " and we always do. <br>";

            $x = 100;
            $y = 200;
            echo "$x + $y <br>";
            echo ( $x + $y ). "<br>";

            $a = 777; // global scope
            function f() {
                global $a;
                echo $a."<br>";
            }
            f();

            // function g() {
            //     $b = 999; // local scope
            // }
            // g();
            // echo $b."<br>";

            $c = 2.3;
            $d = 1.8;
            function h() {
                global $c, $d;
                echo ($c + $d)."<br>";
            }
            h();

            $GLOBALS['c'] += 1;
            echo $c."<br>";
            function k() {
                echo ( $GLOBALS['x'] + $GLOBALS['a'] )."<br>";
            }
            k();

            function m() {
                static $n = 4;
                echo $n."<br>";
                $n++;
            }
            m();
            m();
            m();
        ?>
    </body>
</html>
<!-- PHP Variables Scope: local | global | static -->

<!-- The global keyword is used to access a global variable from within a function. -->

<!-- PHP also stores all global variables in an array called $GLOBALS[index].
The index holds the name of the variable.
This array is also accessible from within functions and can be used to update global variables directly. -->


