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
            foreach( filter_list() as $key => $value ) {
                echo $key." - ".filter_id($value)." - ".$value."<br>";
            }
            echo "<hr>";

            echo "<h4> STRING </h4>";
            // NO VALIDATE
            $sanitize = filter_var(123 ,FILTER_SANITIZE_STRING);
            $sanitize1 = filter_var("<h1> LOVE </h1>" ,FILTER_SANITIZE_STRING);
            $sanitize2 = filter_var("PAUL" ,FILTER_SANITIZE_STRING);
            echo $sanitize." | ".$sanitize1." | ".$sanitize2."<br>";

            echo "<h4> INTEGER </h4>";
            // NO VALIDATE
            $sanitize = filter_var(3.1416 ,FILTER_SANITIZE_NUMBER_INT);
            $sanitize1 = filter_var("<h1> 007 </h1>" ,FILTER_SANITIZE_NUMBER_INT);
            $sanitize2 = filter_var("PAUL" ,FILTER_SANITIZE_NUMBER_INT);
            echo $sanitize." | ".$sanitize1." | ".$sanitize2."<br>";

            echo "<h4> FLOAT </h4>";
            // NO VALIDATE
            $sanitize = filter_var(3.1416 ,FILTER_SANITIZE_NUMBER_FLOAT , FILTER_FLAG_ALLOW_FRACTION);
            $sanitize1 = filter_var("0,0,7" ,FILTER_SANITIZE_NUMBER_FLOAT , FILTER_FLAG_ALLOW_THOUSAND);
            $sanitize2 = filter_var("2e3" ,FILTER_SANITIZE_NUMBER_FLOAT , FILTER_FLAG_ALLOW_SCIENTIFIC);
            $sanitize3 = filter_var("5-2+4/0" ,FILTER_SANITIZE_NUMBER_FLOAT);
            $sanitize4 = filter_var("56.7a" ,FILTER_SANITIZE_NUMBER_FLOAT);
            echo $sanitize." | ".$sanitize1." | ".$sanitize2." | ".$sanitize3." | ".$sanitize4."<b>";

            echo "<h4> BOOLEAN </h4>";
            // NO SANITIZE
            $validate = !filter_var(true , FILTER_VALIDATE_BOOLEAN) === false? "true":"false";
            $validate1 = !filter_var(0 , FILTER_VALIDATE_BOOLEAN) === false? "true":"false";
            $validate2 = !filter_var("" , FILTER_VALIDATE_BOOLEAN) === false? "true":"false";
            $validate3 = !filter_var("1" , FILTER_VALIDATE_BOOLEAN) === false? "true":"false";
            echo $validate." | ".$validate1." | ".$validate2." | ".$validate3." | "."<br>";

            echo "<h4> EMAIL <h4>";
            $validate = !filter_var("nishan@gmail.com" , FILTER_VALIDATE_EMAIL) === false? "true":"false";
            $validate1 = !filter_var("nishangmail.com" , FILTER_VALIDATE_EMAIL) === false? "true":"false";
            $validate2 = !filter_var("nishan@gmailcom" , FILTER_VALIDATE_EMAIL) === false? "true":"false";
            $sanitize = filter_var("nishan(@gmail).com" , FILTER_SANITIZE_EMAIL);
            echo $validate." - ".$validate1." - ".$validate2." - ".$sanitize."<br>";

            echo "<h4> URL <h4>";
            $validate = !filter_var("https://www.google.com/" , FILTER_VALIDATE_URL) === false? "true":"false";
            $validate1 = !filter_var("https://www�.google.com/" , FILTER_VALIDATE_URL) === false? "true":"false";
            $validate2 = !filter_var("https://www.google.�com/" , FILTER_VALIDATE_URL) === false? "true":"false";
            $validate3 = !filter_var("https://www.w3schools.com/php/showphp.asp?filename=demo_filter_adv3" , FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false? "true":"false";
            $sanitize = filter_var("https:/��/www.google.com/" , FILTER_SANITIZE_URL);
            echo $validate." - ".$validate1." - ".$validate2." - ".$validate3." - ".$sanitize."<br>";

            echo "<h4> IP <h4>";
            $validate = !filter_var("127.0.0.1" , FILTER_VALIDATE_IP) === false? "true":"false";
            $validate1 = !filter_var("1.2.3.4.5" , FILTER_VALIDATE_IP) === false? "true":"false";
            $validate2 = !filter_var("nishan" , FILTER_VALIDATE_IP) === false? "true":"false";
            $validate3 = !filter_var("355.0.1.2" , FILTER_VALIDATE_IP) === false? "true":"false";
            $validate4 = !filter_var("2001:0db8:85a3:08d3:1319:8a2e:0370:7334" , FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false? "true":"false";
            echo $validate." - ".$validate1." - ".$validate2." - ".$validate3." - ".$validate4."<br>";
        ?>
    </body>
</html>
<!-- Validating data = Determine if the data is in proper form -->
<!-- Sanitizing data = Remove any illegal character from the data -->

<!-- Many web applications receive external input. -->
<!-- We should always validate external data. -->
<!-- Cause invalid submitted data can lead to security problems and break our webpage. -->
<!-- PHP filters are used to validate and sanitize external input. -->
<!-- By using PHP filters we can be sure our application gets the correct input. -->

<!-- filter_list() function is used to list all supported filters. -->