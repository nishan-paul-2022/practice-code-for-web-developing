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
            function show_databse($server) {
                $sql = "SHOW DATABASES";
                $query = mysqli_query($server, $sql);
                while( $result = mysqli_fetch_assoc($query) ) {
                    echo $result["Database"]." | ";
                }
                echo "<hr>";
            }

            function create_database($server, $databasename) {
                $sql = "CREATE DATABASE $databasename"; // CREATE DATABASE
                mysqli_query($server, $sql);
                show_databse($server);
            }

            function drop_database($server, $databasename) {
                $sql = "DROP DATABASE $databasename";// DROP DATABASE
                mysqli_query($server, $sql);
                show_databse($server);
            }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $server = mysqli_connect($servername, $username, $password);

            $databasename = "0_mysql_create_database";
            create_database($server, $databasename);

            $databasename = "z";
            create_database($server, $databasename); 
            
            drop_database($server, $databasename);

            mysqli_close($server);
        ?>
    </body>
</html>
<!-- create database | show database | drop database -->
<!-- $query is mysqli object -->
<!-- mysqli_fetch_assoc($query) converts mysqli object into array -->