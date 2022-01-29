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
        function isError($database, $flag) {
            if( !$flag )
                die( mysqli_error($database) );
            else
                echo "ALL OK";
        }

        function create_database($server, $databasename) {
            $sql = "CREATE DATABASE $databasename"; // CREATE DATABASE
            mysqli_query($server, $sql);
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $server = mysqli_connect($servername, $username, $password);

        $databasename = "1_mysql_create_table";
        create_database($server, $databasename);
        $database = mysqli_connect($servername, $username, $password, $databasename);

        $sql = "CREATE TABLE one (
                    id INT(7) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                    fullname VARCHAR(70) NOT NULL,
                    department VARCHAR(70) NOT NULL,
                    email VARCHAR(70),
                    regtime TIMESTAMP
                )";
        $flag = mysqli_query($database, $sql);
        isError($database, $flag);

        mysqli_close($server);
        mysqli_close($database);
    ?>
</body>
</html>
<!-- create table -->