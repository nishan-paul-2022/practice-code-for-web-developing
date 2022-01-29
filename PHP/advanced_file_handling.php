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
            $omg = readfile("text_webdictionary.txt"); echo $omg."<hr>";

            $omg = readfile("@advanced_regular_expression.php"); echo $omg."<hr>";

            $omg = readfile("advanced_file_handling.php"); echo $omg;
        ?>
    </body>
</html>
<!-- readfile("filename.extension") -->
<!-- return the text of the specified file in string -->
<!-- html / css / js will work, php won't -->
