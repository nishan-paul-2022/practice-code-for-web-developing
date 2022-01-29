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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "4_mysql_insert_multiple";
            $database = mysqli_connect($servername, $username, $password, $databasename);

            $fullname = "NISHAN"; $university = "CUET"; $department = "CSE";
            $sql = "INSERT INTO one(fullname, university, department) VALUES('$fullname', '$university', '$department');";
            $fullname = "SAIKAT"; $university = "BUET"; $department = "CIVIL";
            $sql = $sql. "INSERT INTO one(fullname, university, department) VALUES('$fullname', '$university', '$department');";
            $fullname = "SAJID"; $university = "AUST"; $department = "CSE";
            $sql = $sql. "INSERT INTO one(fullname, university, department) VALUES('$fullname', '$university', '$department');";
            $flag = mysqli_multi_query($database, $sql);
            isError($database, $flag);

            mysqli_close($database);
        ?>
    </body>
</html>
