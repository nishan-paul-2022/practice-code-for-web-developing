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
            $x = $_SERVER['PHP_SELF']; // file_path
            $y = urlencode( $x ); // file_path to URL
            $z = urldecode( $y ); // URL to file_path
            echo $x."<br>";
            echo $y."<br>";
            echo $z."<br>";

            echo "omg".("\t\tThese are...  ")."? <br>";
            echo "omg".trim("\t\tThese are...  ")."? <br>"; // trim whitespace, tab, newline from beginning and end of a string

            echo stripslashes( "0123\\45678/9" )."<br>"; // trim backslash

            $email = "john.doe@example.com";
            $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove all illegal characters from email
            if( filter_var($email, FILTER_VALIDATE_EMAIL) ) // Validate e-mail
                echo("$email is a valid email address <br>");
            else
                echo("$email is not a valid email address <br>");
        ?>
    </body>
</html>
