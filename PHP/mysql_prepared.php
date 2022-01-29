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
            if( $_SERVER["REQUEST_METHOD"]=="POST" ) {
                function show_table() {
                    global $database;
                    $sql = "SELECT * FROM one";
                    $query = mysqli_query($database, $sql);
                    while( $row = mysqli_fetch_assoc($query) ) {
                        echo $row["id"].". ".$row["name"]." - ".$row["subject"]."<br>";
                    }
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "5_mysql_prepared";
                $database = mysqli_connect($servername, $username, $password, $databasename);

                $sql = "INSERT INTO one(name, subject) VALUES(?, ?)";
                $stmt = mysqli_prepare($database, $sql);
                $name = $_POST["name"];
                $subject = $_POST["subject"];
                mysqli_stmt_bind_param($stmt, "ss", $name, $subject);
                mysqli_stmt_execute($stmt);

                mysqli_stmt_close($stmt);

                show_table();

                mysqli_close($database);
            }
        ?>
        <form action="mysql_limit_data.php" method="post">
            <input type="text" name="name"> NAME <br>
            <input type="text" name="subject"> SUBJECT <br>
            <input type="submit">
        </form>
    </body>
</html>
<!-- i: integer -->
<!-- s: string -->
<!-- d: double -->