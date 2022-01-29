<?php
    session_start();
    $_SESSION["velocity"] = 300000000;
    $_SESSION["pi"] = 3.1416;
    $_SESSION["user"] = "paul";
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

        <?php header("location: advanced_sessions(1).php"); ?>
    
    </body>
</html>
<!--    session_start()
        session_unset()   : unset all session variables in the session file
        session_destroy() : delete the session file
        session_id()          : randomly generated 32 digit hexadecimal number
        $_COOKIE["PHPSESSID"] : randomly generated 32 digit hexadecimal number
        $_SESSION["variable_name"] = "value" : set a specific variable
        unset( $_SESSION["variable_name"] )  : unset a specific variable
        isset( $_SESSION["variable_name"] )  : checking if a specific variable is set

$_SESSION is a device based super global array.
An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.
A session creates a file in a temporary directory on the server where registered session variables and their values are stored.
This data will be available to all pages on the site during that visit.
The location of the temporary file is determined by a setting in the php.ini file called session.save_path.

Before accessing a session variable, first start session on that page.
We can not start multiple sessions in a single page.
When a session is started following things happen −
. PHP first creates a unique identifier for that particular session which is a random string of 32 digit hexadecimal number such as 3c7foj34c3jj973hjkop2fc937e3443
. A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string
. A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ such as sess_3c7foj34c3jj973hjkop2fc937e3443

When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values. -->


