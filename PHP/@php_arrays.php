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
            $movies = array(
                "a" => array(
                    "title" => "Rear Window",
                    "director" => "Alfred Hitchcock",
                    "year" => 1954
                ),
                "b" => array(
                    "title" => "Full Metal Jacket",
                    "director" => "Stanley Kubrick",
                    "year" => 1987
                ),
                "c" => array(
                    "title" => "Mean Streets",
                    "director" => "Martin Scorsese",
                    "year" => 1973
                )
            );
  
            foreach ( $movies as $movie ) {
                foreach ( $movie as $value ) {
                    echo $value." - ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>