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
            if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                function isError($database, $flag) {
                    if( !$flag )
                        die( mysqli_error($database) );
                    else
                        echo "ALL OK";
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "2_mysql_insert_data";
                $database = mysqli_connect($servername, $username, $password, $databasename);

                $fullname = $_POST["fullname"];
                $department = $_POST["department"];
                $email = $_POST["email"];

                $sql = "INSERT INTO one(fullname, department, email) VALUES('$fullname', '$department', '$email')";
                $flag = mysqli_query($database, $sql);
                isError($database, $flag);

                mysqli_close($database);
            }
        ?>
        <form action="mysql_insert_data.php" method="post">
            <input type="text" name="fullname"> FULL NAME <br>
            <input type="text" name="department"> DEPARTMENT <br>
            <input type="email" name="email"> EMAIL <br>
            <input type="submit">
        </form>
    </body>
</html>
<!-- id INT(7) AUTO_INCREMENT PRIMARY KEY NOT NULL, -->
<!-- fullname VARCHAR(70) NOT NULL, -->
<!-- department VARCHAR(70) NOT NULL, -->
<!-- email VARCHAR(70), -->
<!-- regtime TIMESTAMP -->
