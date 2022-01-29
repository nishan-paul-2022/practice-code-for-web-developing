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
            $a = "HELLO";
            var_dump( $a ); echo "<br>";

            $b = 123;
            var_dump( $b ); echo "<br>";

            $c = 3.1416;
            var_dump( $c ); echo "<br>";

            $d = true;
            var_dump( $d ); echo "<br>";

            $e = array(1,2,3,"n");
            var_dump( $e ); echo "<br>";

            $f = null;
            var_dump( $f ); echo "<br>";

            class omg {
                public function __construct($r) {
                    $this->r = $r;
                    $this->p = 3.1416;
                }
                public function area() {
                    $ans = $this->p * $this->r * $this->r;
                    return $ans;
                }
                public function circum() {
                    $ans = 2 * $this->p * $this->r;
                    return $ans;
                }
            }
            $iron = new omg(5);
            echo $iron->area()."<br>";
            echo $iron->circum()."<br>";
        ?>
    </body>
</html>
<!-- PHP supports the following data types:
String
Integer
Float
Boolean
Array
Object
NULL
Resource -->

<!-- Integers can be specified in three formats: decimal, hexadecimal (prefixed with 0x) or octal (prefixed with 0) -->
<!-- A float (floating point number) is a number with a decimal point or a number in exponential form. -->

