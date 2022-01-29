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
            // $file = fopen("omg.txt","r") or die("SORRY, FILE DOES NOT EXIST");
            // echo( "hello! <br>" ); // will not execute

            // function customError($code, $message, $file, $line) { // error handler function
            //     echo( " ERROR CODE: $code <br>
            //             ERROR MESSAGE: $message <br>
            //             FILE NAME: $file <br>
            //             LINE NUMBER: $line <br> ");
            // }
            // set_error_handler("customError");
            // echo( $test );

            function customError($code, $message, $file, $line) { // error handler function
                echo( " ERROR CODE: $code <br>
                        ERROR MESSAGE: $message <br>
                        FILE NAME: $file <br>
                        LINE NUMBER: $line <br> ");
            }
            set_error_handler("customError", E_USER_WARNING);
            $x = -7;
            if( $x<1 || $x>100 ) {
                $message = "VALUE MUST BE BETWEEN 1 TO 100";
                $codename = E_USER_WARNING;
                trigger_error($message, $codename);
            }
        ?>
    </body>
</html>
<!-- every time we call die() function, the file will stop immediately -->
<!-- set_error_handler("function_name"):  -->
<!-- trigger_error($message, $codename) : to create our own errors and to trigger them -->