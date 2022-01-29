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
            $omg = array(5,3,7,4,6,10,8,2,7,1,9);
            sort($omg); // ascending alphabetical order
            foreach($omg as $value) { echo "$value "; } echo "<br>";
            rsort($omg); // descending alphabetical order
            foreach($omg as $value) { echo "$value "; } echo "<br>";

            $omg = array("z","g","a","e","b","i","h","c","x");
            sort($omg); // ascending numerical order
            foreach($omg as $value) { echo "$value "; } echo "<br>";
            rsort($omg); // descending numerical order
            foreach($omg as $value) { echo "$value "; } echo "<br>";

            $omg = array("e" => 35, "z" => 12, "m" => 97, "i" => 78, "a" => 55, "g" => 34, "r" => 21);
            asort($omg); // ascending value-based order
            foreach($omg as $index=>$value) { echo "$index: $value, "; } echo "<br>";
            arsort($omg); // descending value-based order
            foreach($omg as $index=>$value) { echo "$index: $value, "; } echo "<br>";

            $omg = array("e" => 35, "z" => 12, "m" => 97, "i" => 78, "a" => 55, "g" => 34, "r" => 21);
            ksort($omg); // ascending index-based order
            foreach($omg as $index=>$value) { echo "$index: $value, "; } echo "<br>";
            krsort($omg); // descending index-based order
            foreach($omg as $index=>$value) { echo "$index: $value, "; } echo "<br>";
        ?>
    </body>
</html>