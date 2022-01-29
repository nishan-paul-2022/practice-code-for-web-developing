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
            $omg = fopen("text_one.txt","r") or die("Unable to open file!");
            $n = filesize("text_one.txt");
            $x = fread( $omg, $n );
            echo "number of characters in the file: ".$n."<br>";
            echo $x."<hr>";

            $omg = fopen("text_one.txt","r");
            while( !feof($omg) ) {
                $x = fgets( $omg );
                echo $x."<br>";
            }
            echo "<hr>";

            $omg = fopen("text_one.txt","r");
            while( !feof($omg) ) {
                $x = fgetc( $omg );
                echo $x." ";
            }
            echo "<hr>";

            fclose($omg);
        ?>
    </body>
</html>
<!-- fopen() | fclose() -->
<!-- fread() read the whole file -->
<!-- fgets() read line by line -->
<!-- fgetc() read character by character -->
<!-- feof() check end of file -->
<!-- filesize() number of characters in file -->

<!-- r : Open a file for read only. File pointer starts at the beginning of the file -->
<!-- w : Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file -->
<!-- a : Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist -->
<!-- x : Creates a new file for write only. Returns FALSE and an error if file already exists -->

<!-- r+ : Open a file for read/write. File pointer starts at the beginning of the file -->
<!-- w+ : Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file -->
<!-- a+ : Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist -->
<!-- x+ : Creates a new file for read/write. Returns FALSE and an error if file already exists -->
