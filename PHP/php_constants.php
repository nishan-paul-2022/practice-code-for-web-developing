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
            define("omg", 3.1416); // case sensitive
            echo omg."<br>";
            function f() {
                echo omg."<br>";
            }
            f();

            define("snow", "a dragon raised by wolves", true); // case insensitive
        ?>
    </body>
</html>
<!-- define(constant_name, value, case-insensitive) -->
<!-- Constants are like variables except that once they are defined they cannot be changed or undefined. -->
<!-- A valid constant name starts with a letter or underscore (no $ sign before the constant name). -->
<!-- Constants are automatically global and can be used across the entire script. -->