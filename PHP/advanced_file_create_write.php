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
            $omg = fopen("text_two.txt","w");
            $value = "nishan paul";
            fwrite($omg, $value);
            fclose($omg);

            $omg = fopen("text_two.txt","w");
            $why = fopen("form_validation.php","r");
            $value = fread($why, filesize("form_validation.php"));
            fwrite($omg, $value);
            fclose($omg);
        ?>
    </body>
</html>