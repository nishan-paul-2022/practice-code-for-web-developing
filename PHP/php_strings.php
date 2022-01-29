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
            echo strlen("HELLO")."<br>"; // The PHP strlen() function returns the length of a string.
            echo strrev("ABCD")."<br>"; // The PHP strrev() function reverses a string.
            echo strpos("ABCDEFGHIJ","DEF")."<br>"; // The PHP strpos() function searches for a specific text within a string.
            echo str_word_count("A DRAGON RAISED BY WOLVES")."<br>"; // The PHP str_word_count() function counts the number of words in a string.
            echo str_replace("MAN", "BAT", "IRON MAN")."<br>"; // The PHP str_replace() function replaces some characters with some other characters in a string.
        ?>
    </body>
</html>
