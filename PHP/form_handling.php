<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="form_handling.php">
            NAME: <input type="text" name="name"> <br>
            EMAIL: <input type="text" name="email"> <br>
            <input type="submit" value="ENTER">
        </form>
        <?php
            if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                $name = $_REQUEST["name"];
                $email = $_REQUEST["email"];
                if ( empty($name) ) {
                    echo "Name is empty";
                }
                elseif( empty($email) ) {
                    echo "Email is empty";
                }
                else {
                    echo "<h2> THE NAME IS $name </h2>";
                    echo "<h2> EMAIL ADDRESS IS $email </h2>";
                }
            }
        ?>
    </body>
</html>
<!-- we can use 'get' method instead of 'post' -->
<!-- we can use 'isset( $_REQUEST['variable_name'] )' to check if $variable_name is filled up -->
<!-- $_GET for get method | $_POST for post method | $_REQUEST for both get and post method -->
