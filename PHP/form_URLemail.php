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

                if( empty($name) ) {
                    $nameE = "Name is required";
                }
                elseif( !preg_match("/^[a-zA-Z ]*$/",$name) ) {
                    $nameE = "Only letters and white space allowed";
                }

                if( empty($email) ) {
                    $emailE = "Email is required";
                }
                elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                    $emailE = "Invalid email format";
                }

                if( !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website) ) {
                    $websiteE = "Invalid URL"; 
                }

                if( empty($gender) ) {
                    $genderE = "Gender is required";
				}
            }
        ?>

        <p> <span class="error"> * required field </span> </p>

        <form method="post" action="<?php echo htmlspecialchars('form_URLemail.php'); ?>">
            Name: <input type="text" name="name"> <span class="error"> * <?php echo $nameE; ?> </span> <br>
            E-mail: <input type="text" name="email"> <span class="error"> * <?php echo $emailE; ?> </span> <br>
            Website: <input type="text" name="website"> <span class="error"> * <?php echo $websiteE; ?> </span> <br> <br>
            Comment: <textarea name="comment" rows="5" cols="40"> </textarea> <br>
            Gender: <span class="error"> * <?php echo $genderE; ?> </span> <br>
            <input type="radio" name="gender" <?php if($gender=="female") echo "checked"; ?> value="female"> Female <br>
            <input type="radio" name="gender" <?php if($gender=="male") echo "checked"; ?> value="male"> Male <br>
            <input type="radio" name="gender" <?php if($gender=="other") echo "checked"; ?> value="other"> Other <br>
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