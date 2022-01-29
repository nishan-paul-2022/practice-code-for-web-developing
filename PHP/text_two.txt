<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
            $nameE = $emailE = $genderE = $websiteE = "";
            $name = $email = $gender = $comment = $website = "";
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $website = test_input($_POST["website"]);
                $gender = isset($_POST["gender"])? test_input($_POST["gender"]):"";
                $comment = test_input($_POST["comment"]);
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars('form_validation.php') ?>">
            Name: <input type="text" name="name"> <br>
            E-mail: <input type="text" name="email"> <br>
            Website: <input type="text" name="website"> <br> <br>
            Comment: <textarea name="comment" rows="5" cols="40"> </textarea> <br>
            Gender: <br>
            <input type="radio" name="gender" value="female"> Female <br>
            <input type="radio" name="gender" value="male"> Male <br>
            <input type="radio" name="gender" value="other"> Other <br>
            <input type="submit" value="SUBMIT">
        </form>

        <?php
            echo "<h2> Your Input: </h2>";
            echo $name."<br>";
            echo $email."<br>";
            echo $website."<br>";
            echo $comment."<br>";
            echo $gender."<br>";
        ?>
    </body>
</html>
<!-- we should use $_SERVER['PHP_SELF'] instead of 'form_handling.php' in action attribute -->
<!-- htmlspecialchars() convert some special chars into html entities, so that any xss can not be executed -->

