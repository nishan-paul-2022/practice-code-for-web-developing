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
            $databasename = "7_mysql_delete_data";
            $database = new mysqli($servername, $username, $password, $databasename);

            $sql = "DELETE FROM one WHERE id=2";
            mysqli_query($database, $sql);

            $sql = "DELETE FROM two";
            mysqli_query($database, $sql);

            mysqli_close($database);
        ?>
    </body>
</html>
<!--
    INSERT INTO `two` (`name`, `subject`) VALUES
    ('NISHAN', 'CSE'),
    ('NISHAN', 'CSE'),
    ('SAJID', 'CSE'),
    ('NISHAN', 'CSE'),
    ('SAJID', 'CSE');
-->