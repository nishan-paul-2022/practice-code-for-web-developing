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
            if( $_SERVER["REQUEST_METHOD"]=="GET" ) {
                $database = mysqli_connect("localhost", "root", "", "10_ajax_php");
                $sql = "SELECT * FROM one";
                $query = mysqli_query($database, $sql);
                $store = [];
                while( $row = mysqli_fetch_assoc($query) ) {
                    $store[] = $row["name"];
                }
                $q = strtolower( $_REQUEST["q"] );
                $n = strlen($q);
                $hint = "";
                foreach($store as $flag) {
                    $r = substr($flag, 0, $n);
                    if( stristr($q, $r) ) {
                        $hint .= $flag." ";
                    }
                }
                $hint = $hint==""? "NO SUGGESTION":$hint;
            }
        ?>
    </body>
</html>
<!-- strlen() -->
<!-- strtolower() -->
<!-- stristr() -->
<!-- substr() -->