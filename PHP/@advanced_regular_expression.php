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
            $line = "vi is the greatest word processor ever created!";
            $flag = preg_match("/\bVi\b/i", $line);
            echo $flag."<br>";

            $copy_date = "Copyright 1999";
            $copy_date = preg_replace("([0-9]+)", "2000", $copy_date);
            echo $copy_date."<br>";
        ?>
    </body>
</html>
<!-- Brackets -->
<!-- [0-9] It matches any decimal digit from 0 through 9. -->
<!-- [a-z] It matches any character from lower-case a through lowercase z. -->
<!-- [A-Z] It matches any character from uppercase A through uppercase Z. -->
<!-- [a-Z] It matches any character from lowercase a through uppercase Z. -->

<!-- Quantifiers -->
<!-- p+ It matches any string containing at least one p. -->
<!-- p* It matches any string containing zero or more p's. -->
<!-- p? It matches any string containing zero or one p's. -->
<!-- p{N} It matches any string containing a sequence of N p's -->
<!-- p{2,3} It matches any string containing a sequence of two or three p's. -->
<!-- p{2, } It matches any string containing a sequence of at least two p's. -->
<!-- p$ It matches any string with p at the end of it. -->
<!-- ^p It matches any string with p at the beginning of it. -->

<!-- Special Expression -->
<!-- [^a-zA-Z] It matches any string not containing any of the characters ranging from a through z and A through Z. -->
<!-- ^.{2}$ It matches any string containing exactly two characters. -->
<!-- <b>(.*)</b> It matches any string enclosed within <b> and </b>. -->

<!-- Predefined Character Ranges -->
<!-- [[:alpha:]] It matches any string containing alphabetic characters aA through zZ. -->
<!-- [[:digit:]] It matches any string containing numerical digits 0 through 9. -->
<!-- [[:alnum:]] It matches any string containing alphanumeric characters aA through zZ and 0 through 9. -->
<!-- [[:space:]] It matches any string containing a space. -->

<!-- Meta Characters -->
<!-- \s             a whitespace character (space, tab, newline) -->
<!-- \S             non-whitespace character -->
<!-- \d             a digit (0-9) -->
<!-- \D             a non-digit -->
<!-- \w             a word character (a-z, A-Z, 0-9, _) -->
<!-- \W             a non-word character -->
<!-- (foo|bar|baz)  matches any of the alternatives specified -->

<!-- Modifiers -->
<!-- i 	Makes the match case insensitive -->
<!-- g 	Globally finds all matches -->