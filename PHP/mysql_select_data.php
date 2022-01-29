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
            $databasename = "6_mysql_select_data";
            $database = new mysqli($servername, $username, $password, $databasename);

            $sql = "SELECT * FROM one";
            $query = mysqli_query($database, $sql);
            $x = mysqli_num_rows($query);
            $y = mysqli_num_fields($query);
            echo "NUMBER OF ROWS: ".$x."<br>";
            echo "<br> NUMBER OF COLUMNS: ".$y."<br>";

            if( $x > 0 ) {
                while( $row = mysqli_fetch_assoc($query) ) {
                    echo $row["id"]." ".$row["name"]." ".$row["subject"]." ".$row["roll"]." ".$row["regtime"]."<br>";
                }
            }
            echo "<hr>";

            $sql = "SELECT name, subject FROM one WHERE id>=3";
            $query = mysqli_query($database, $sql);
            if( mysqli_num_rows($query) ) {
                while( $row = mysqli_fetch_assoc($query) ) {
                    echo $row["name"]." and ".$row["subject"]."<br>";
                }
            }

            mysqli_close($database);
        ?>
    </body>
</html>
<!-- mysqli_num_row() -->
<!-- mysqli_num_column() -->
<!-- mysqli_fetch_assoc() -->
