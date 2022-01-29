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
            $arrow = "advanced_file_upload/";
            if( isset($_POST["upload"]) ) {
                move_uploaded_file($_FILES['photos']["tmp_name"], $arrow.$_FILES['photos']["name"]);
            }

            if( isset($_POST["1upload"]) ) {
                $n = count($_FILES["photos"]['name']);
                for($i = 0; $i < $n; $i++) {
                    move_uploaded_file($_FILES['photos']["tmp_name"][$i], $arrow.$_FILES['photos']["name"][$i]);
                }
            }

            if( isset($_POST["2upload"]) ) {
                $product_ids = $_POST["product_ids"];
                foreach($product_ids as $value) {
                    move_uploaded_file($_FILES['photos']["tmp_name"][$value][0], $arrow.$_FILES['photos']["name"][$value][0]);
                }
            }

            if( isset($_POST["3upload"]) ) {
                $product_ids = $_POST["product_ids"];
                foreach($product_ids as $value) {
                    $n = count($_FILES["photos"]['name'][$value]);
                    for($i = 0; $i < $n; $i++) {
                        move_uploaded_file($_FILES['photos']["tmp_name"][$value][$i], $arrow.$_FILES['photos']["name"][$value][$i]);
                    }
                }
            }
        ?>
        <h3> SINGLE FILE - SINGLE FIELD </h3>
        <form action="advanced_file_upload(2).php" method="post" enctype="multipart/form-data">
            <input type="file" name="photos">
            <button type="submit" name="upload">Upload</button>
        </form>

        <h3> MULTIPLE FILE - SINGLE FIELD </h3>
        <form action="advanced_file_upload(2).php" method="post" enctype="multipart/form-data">
            <input type="file" name="photos[]" multiple>
            <button type="submit" name="1upload">Upload</button>
        </form>

        <h3> SINGLE FILE - MULTIPLE FIELD </h3>
        <form action="advanced_file_upload(2).php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_ids[]" value="0">
            <input type="file" name="photos[0][]"> <br>

            <input type="hidden" name="product_ids[]" value="1">
            <input type="file" name="photos[1][]"> <br>

            <button type="submit" name="2upload">Upload</button>
        </form>

        <h3> MULTIPLE FILE - MULTIPLE FIELD </h3>
        <form action="advanced_file_upload(2).php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_ids[]" value="0">
            <input type="file" name="photos[0][]" multiple> <br>

            <input type="hidden" name="product_ids[]" value="1">
            <input type="file" name="photos[1][]" multiple> <br>

            <button type="submit" name="3upload">Upload</button>
        </form>
    </body>
</html>

<!-- in php.ini config file, -->

<!-- file_uploads = On -->
<!-- upload_max_size = 10M -->
<!-- post_max_size = 10M -->
<!-- max_input_time = 300 -->
<!-- max_execution_time = 300 -->
<!-- max_file_uploads = 20 -->