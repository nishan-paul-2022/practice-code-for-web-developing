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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "8_mysql_update_data";
            $database = new mysqli($servername, $username, $password, $databasename);

            $sql = "UPDATE one SET subject='PHILOSOPHY', roll=007 WHERE id=3";
            mysqli_query($database, $sql);

            mysqli_close($database);
        ?>
    </body>
</html>