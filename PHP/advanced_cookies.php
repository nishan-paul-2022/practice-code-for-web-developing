<?php
    $cookie_name = "lang";
    $cookie_value = "bangla";
    $cookie_expire = time()+3000000;
    $cookie_path = "/";
    setcookie($cookie_name, $cookie_value, $cookie_expire, $cookie_path);

    $cookie_name1 = "subject";
    $cookie_value1 = "cse";
    $cookie_expire1 = time()+60;
    $cookie_path1 = "/";
    setcookie($cookie_name1, $cookie_value1, $cookie_expire1, $cookie_path1);

    $cookie_name2 = "batch";
    $cookie_value2 = 16;
    $cookie_expire2 = time()+86400;
    $cookie_path2 = "/";
    setcookie($cookie_name2, $cookie_value2, $cookie_expire2, $cookie_path2);
?>
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
            echo $_COOKIE[$cookie_name]."<br>";

            if( !isset( $_COOKIE[$cookie_name1] ) ) {
                echo "<span style='color:red;'> $".$cookie_name1." is not valid anymore </span> <br>";
            } else {
                echo $_COOKIE[$cookie_name1]." <br>";
            }

            echo "number of active cookies: ".count( $_COOKIE )."<br>";

            setcookie($cookie_name2, $cookie_value2, time()-100, $cookie_path2); // optional
            if( !isset( $_COOKIE[$cookie_name2] ) ) {
                echo "<span style='color:red;'> $".$cookie_name2." is not valid anymore </span> <br>";
            } else {
                echo $_COOKIE[$cookie_name2]." <br>";
            }

            setcookie($cookie_name, "english", $cookie_expire, $cookie_path); // optional
            echo $_COOKIE[$cookie_name]."<br>";
        ?>
    </body>
</html>
<!-- A cookie is often used to identify a user. -->
<!-- A cookie is a small file that the server embeds on the user's computer. -->
<!-- Each time the same computer requests a page with a browser, it will send the cookie too. -->
<!-- With PHP, we can both create and retrieve cookie values. -->

<!-- setcookie(name, value, expire, path, domain, secure, httponly) -->
<!-- only the name parameter is required, all other parameters are optional. -->

