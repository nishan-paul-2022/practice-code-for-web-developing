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
            $error = "";
            if( $_SERVER["REQUEST_METHOD"]=="POST" ) {

                if( !empty( $_FILES["bob"]["tmp_name"] ) ) {
                    $filename = $_FILES["bob"]["name"];
                    $target = "advanced_file_upload/" . $filename;
                    $temporary = $_FILES["bob"]["tmp_name"];
                    $flag = getimagesize( $_FILES["bob"]["tmp_name"] );                    
                    $extension = strtolower( pathinfo( $_FILES["bob"]["name"], PATHINFO_EXTENSION ) );
                    $sze = $_FILES["bob"]["size"];

                    if( !$flag ) {
                        array_push($errors, "NOT IMAGE FILE");
                    }
                    elseif( $extension!="jpg" && $extension!="jpeg" && $extension!="png" && $extension!="gif" ) {
                        array_push($errors, "ONLY JPG, JPEG, PNG AND GIF ARE ALLOWED");
                    }
                    elseif( $sze > 100 ) {
                        array_push($errors, "SIZE LIMIT IS 100KB");
                    }
                    elseif( file_exists($target) ) {
                        array_push($errors, "FILE ALREADY EXISTS");
                    }
                    if( empty($error) ) {
                        if( move_uploaded_file( $temporary, $target ) ) {
                            $database = mysqli_connect("localhost", "root", "", "12_advanced_file_upload(1)") or die("UNABLE TO CONNECT DATABASE");
                            $description = mysqli_real_escape_string($database, $_POST["description"] );
                            $sql = "INSERT INTO one(name, description) VALUES('$filename', '$description')";
                            if( mysqli_query($database, $sql) ) {
                                echo "DONE <br>";
                            }
                        }
                    }
                }
            }
        ?>

        <form action="advanced_file_upload(1).php" method="post" enctype="multipart/form-data">
            UPLOAD IMAGE FILE ONLY: 
            <input type="file" name="bob"> <br>
            <input type="text" name="description"> <br>
            <input type="submit">
        </form>

        <div id="one" style="color:red;"> <?php echo( $error ); ?> </div>
    </body>
</html>
