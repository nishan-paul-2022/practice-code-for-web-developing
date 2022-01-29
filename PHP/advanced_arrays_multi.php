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
            $omg = array(
                array("nishan",1604085),
                array("chinmoy",1604091),
                array("gourob",1604098),
                array("ayan",1604098)
            );
            for($i = 0; $i < count($omg); $i++) {
                echo "name and roll: ";
                for($j = 0; $j < count($omg[$i]); $j++) {
                    echo $omg[$i][$j]." ";
                }
                echo "<br>";
            }
            echo "<hr>";
            $omg = array(
                array("name"=>"nishan","id"=>1604085),
                array("name"=>"chinmoy","id"=>1604091),
                array("name"=>"gourob","id"=>1604098),
                array("name"=>"ayan","id"=>1604098)
            );
            foreach($omg as $x) {
                foreach($x as $key=>$value) {
                    echo $key.": ".$value." ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>