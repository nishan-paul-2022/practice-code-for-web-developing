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
            $txt1 = "Learn PHP";
            $txt2 = "W3Schools.com";
            $x = 5;
            $y = 4;
            print "<h2>" . $txt1 . "</h2>";
            print "Study PHP at $txt2 <br>";
            print ($x + $y);
        ?>
    </body>
</html>
<!-- echo and print are more or less the same. They are both used to output data to the screen.
The differences are small:
. echo has no return value while print has a return value of 1 so it can be used in expressions.
. echo is marginally faster than print. -->

