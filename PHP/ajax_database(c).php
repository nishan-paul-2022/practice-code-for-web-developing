<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            table, th, td {
                border: 1px solid black;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            if( $_SERVER["REQUEST_METHOD"]=="GET" ) {
                $q = intval($_REQUEST["q"]);
                $database = mysqli_connect("localhost", "root", "", "11_ajax_database");
                $sql = "SELECT * FROM one WHERE id=$q";
                $query = mysqli_query($database, $sql);
                $row = mysqli_fetch_assoc($query);
            }
        ?>
        <br> <br>
        <table>
            <tr>
                <th> NAME </th>
                <th> DEPARTMENT </th>
                <th> EMAIL </th>
                <th> REGISTRATION-TIME </th>
            </tr>
            <tr>
                <td> <?php echo($row["fullname"]); ?> </td>
                <td> <?php echo($row["department"]); ?> </td>
                <td> <?php echo($row["email"]); ?> </td>
                <td> <?php echo($row["regtime"]); ?> </td>
            </tr>
        </table>
    </body>
</html>