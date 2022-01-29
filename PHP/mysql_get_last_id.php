<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="mysql_get_last_id.php" method="post">
            <input type="text" name="fullname"> FULL NAME <br>
            <input type="text" name="department"> DEPARTMENT <br>
            <input type="email" name="email"> EMAIL <br>
            <input type="submit">
        </form>
        <?php
            if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databasename = "3_mysql_get_last_id";
                $database = mysqli_connect($servername, $username, $password, $databasename);

                $fullname = $_POST["fullname"];
                $department = $_POST["department"];
                $email = $_POST["email"];

                $sql = "INSERT INTO one(fullname, department, email) VALUES('$fullname', '$department', '$email')";
                mysqli_query($database, $sql);

                $id = mysqli_insert_id($database);
                echo $id."<br>";

                mysqli_close($database);
            }
        ?>
    </body>
</html>
