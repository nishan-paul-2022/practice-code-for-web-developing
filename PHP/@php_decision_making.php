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
        $d = date("D");
        switch ($d){
            case "Mon":
                echo "Today is Monday"; break;
            case "Tue":
                echo "Today is Tuesday"; break;
            case "Wed":
                echo "Today is Wednesday"; break;
            case "Thu":
                echo "Today is Thursday"; break;
            case "Fri":
                echo "Today is Friday"; break;
            case "Sat":
                echo "Today is Saturday"; break;
            case "Sun":
                echo "Today is Sunday"; break;
            default:
                echo "Wonder which day is this ?";
        }
        ?>
    </body>
</html>