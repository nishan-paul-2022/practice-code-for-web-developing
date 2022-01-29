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
            $databasename = "9_mysql_limit_data";
            $database = mysqli_connect($servername, $username, $password, $databasename);

            $sql = "SELECT * FROM one WHERE subject='CSE' LIMIT 3,4";
            $query = mysqli_query($database, $sql);
            while( $row = mysqli_fetch_assoc($query) ) {
                echo $row["id"].". ".$row["name"]."<br>";
            }
            mysqli_close($database);
    ?>
    </body>
</html>