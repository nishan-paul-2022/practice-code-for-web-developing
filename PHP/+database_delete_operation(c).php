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
            if( $_SERVER["REQUEST_METHOD"]=="GET" ) {
                function isError($flag, $databasename) {
                    if( !$flag )
                        echo "<span style='color:red;'> $databasename </span> NOT DELETED";
                    else
                        echo "<span style='color:red;'> $databasename </span> DELETED";
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $server = mysqli_connect($servername, $username, $password);

                $databasename = $_GET['databasename'];
                $sql = "DROP DATABASE $databasename";
                $flag = mysqli_query($server, $sql);
                isError($flag, $databasename);

                mysqli_close($server);
            }
        ?>
    </body>
</html>