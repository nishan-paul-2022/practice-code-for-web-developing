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
            // BUILT IN EXCEPTION CLASS
            // function f($n) {
            //     if($n < 0)
            //         throw new Exception("negative");
            //     else
            //         echo("ZERO / POSITIVE <br>");
            // }
            // try {
            //     f(-7);
            // }
            // catch(Exception $expton) {
            //     echo(   "MESSAGE: ".$expton->getMessage()."<br>".
            //             "FILE NAME: ".$expton->getFile()."<br>".
            //             "LINE NUMBER: ".$expton->getLine()."<br>"
            //         );
            // }

            // CUSTOMIZED EXCEPTION CLASS
            // class custom extends Exception {
            //     public function error() {
            //         echo(   "MESSAGE: ".$this->getMessage()."<br>".
            //                 "FILE NAME: ".$this->getFile()."<br>".
            //                 "LINE NUMBER: ".$this->getLine()."<br>"
            //             );
            //     }
            // }
            // function f($n) {
            //     if($n<0)
            //         throw new custom("NEGATIVE");
            //     else
            //         echo($n);
            // }
            // try {
            //     f(-7);
            // }
            // catch(custom $c) {
            //     $c->error();
            // }

            // MULTIPLE EXCEPTION THROW
            // class custom extends Exception {
            //     public function error() {
            //         echo(   "MESSAGE: ".$this->getMessage()."<br>".
            //                 "FILE NAME: ".$this->getFile()."<br>".
            //                 "LINE NUMBER: ".$this->getLine()."<br>"
            //             );
            //     }
            // }
            // function f($email) {
            //     if( filter_var($email, FILTER_VALIDATE_EMAIL)===false )
            //         throw new custom("$email is not valid");
            //     else if( strpos($email, "gmail.com")===false )
            //         throw new Exception("$email is not gmail account");
            //     else
            //         echo("$email is valid gmail account <br>");
            // }
            // try {
            //     f("np007@yahoo.com");
            // }
            // catch(custom $c) {
            //     $c->error();
            // }
            // catch(Exception $e) {
            //     echo( $e->getMessage() );
            // }

            // RE-THROWING EXCEPTION
            // class custom extends Exception {
            //     public function error() {
            //         echo(   "MESSAGE: ".$this->getMessage()."<br>".
            //                 "FILE NAME: ".$this->getFile()."<br>".
            //                 "LINE NUMBER: ".$this->getLine()."<br>"
            //             );
            //     }
            // }
            // function f($email) {
            //     if( filter_var($email, FILTER_VALIDATE_EMAIL)===false )
            //         throw new custom("INVALID");
            //     else
            //         throw new custom("VALID");
            // }
            // try {
            //     try {
            //         f("np007@yahoo.com");
            //     }
            //     catch(custom $c) {
            //         $c->error();
            //         if( strpos("np007@yahoo.com", "gmail.com")===false )
            //             throw new Exception("<b> NOT GMAIL </b>");
            //         else
            //             throw new Exception("<b> GMAIL </b>");
            //     }
            // }
            // catch(Exception $e) {
            //     echo( $e->getMessage() );
            // }

            // EXCEPTION HANDLER
            function myHandler(Exception $e) {
                echo( $e->getMessage() );
            }
            set_exception_handler("myHandler");
            function f($n) {
                if($n<0)
                    throw new Exception("NEGATIVE");
                else
                    echo($n);
            }
            f(-7);
        ?>
    </body>
</html>
<!-- expton->getFile() -->
<!-- expton->getLine() -->
<!-- expton->getMessage() -->
<!-- set_exception_handler() -->