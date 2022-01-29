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
        $favcolor = "red";
        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        echo "<br>";
        
        $digit = 777;
        switch ($digit) {
            case "777":
                echo "Your favorite number is 777";
                break;
            case 3:
                echo "Your favorite number is $digit!";
                break;
            case 11:
                echo "Your favorite number is $digit!";
                break;
            default:
                echo "Your favorite color is neither 777, 3, 11;";
        }
    ?>
    </body>
</html>
<!-- switch does not use identity, only equality. -->