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
            $omg = array(0,1,2,3,4,5); // indexed array
            for($i = 0; $i < count($omg); $i++) {
                echo "$omg[$i] ";
            }
            echo "<br>";

            $omg = array("name"=>"NISHAN", "title"=>"PAUL", "ID"=>1604085);
            foreach($omg as $value) {
                echo "$value ";
            }
            echo "<br>";
            foreach($omg as $index => $value) {
                echo "$index - $value <br>";
            }
        ?>
    </body>
</html>