<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <form action="advanced_file_upload.php" method="post" enctype="multipart/form-data">
            UPLOAD IMAGE FILE ONLY: 
            <input type="file" name="bob"> <br>
            <input type="submit" name="xsubmit" value="ENTER">
        </form>

        <div id="one" style="color:red;"> </div>
        
        <?php
            if( isset($_POST["xsubmit"]) ) {

                if( empty( $_FILES["bob"]["tmp_name"] ) ) {
                    echo "NOT SUPPORTED FILE ON THIS SERVER OR DIDN'T SELECT ANY FILE";
                }
                else {
                    $errors = array();

                    $filename = $_FILES["bob"]["name"];
                    $target = "advanced_file_upload/" . $filename;
                    $temporary = $_FILES["bob"]["tmp_name"];
                    $flag = getimagesize( $_FILES["bob"]["tmp_name"] );
                    $extension = strtolower( pathinfo( $_FILES["bob"]["name"], PATHINFO_EXTENSION ) );
                    $sze = ( $_FILES["bob"]["size"] ) / 1024;

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
                    if( !empty($error) ) {
                        echo $error;
                    }
                    else {
                        move_uploaded_file( $temporary, $target );
                        echo 
                            $_FILES["bob"]["name"].'<br>'.
                            $_FILES["bob"]["tmp_name"].'<br>'.
                            $type.'<br>'.
                            $extension.'<br>'.
                            $sze.'<br>'.
                            $flag["mime"]."<br>".
                            $flag["width"]."<br>".
                            $flag["height"];
                    }
                }

            }
        ?>

    </body>
</html>
<!-- in our "php.ini" file, search for the file_uploads directive, and set it to On -->
<!-- we need to make sure that the form uses method="post" -->
<!-- the form also needs the following attribute: enctype="multipart/form-data" -->
<!-- the type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control -->

<!-- $_FILES["bob"]["name"] : file name with extension -->
<!-- $_FILES["bob"]["tmp_name"] : temporary directory of the file -->
<!-- $_FILES["bob"]["size"] : file size -->

<!-- $filename = $_FILES["bob"]["name"] : file name with extension -->
<!-- $target = "advanced_file_upload/" . $filename : target directory -->
<!-- $temporary = $_FILES["bob"]["tmp_name"] -->

<!-- $extension = pathinfo( $_FILES["bob"]["name"], PATHINFO_EXTENSION ) : file extension -->

<!-- $flag = getimagesize( $_FILES["bob"]["tmp_name"] ) : $flag===true if the file is image -->
<!-- $type = $flag["mime"] : file type -->

<!-- file_exists($target) : checks in the target directory if the file already exists -->

<!-- move_uploaded_file( $temporary, $target ) : moves the file from temporary directory to target directory -->