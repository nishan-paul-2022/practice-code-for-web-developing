<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
        <style>
            table.two {
                align:center;
            }
            button.one {
                border: 0.1rem solid black;
                padding: 0.3rem;
                height: 3rem;
                width: 100%;
                font-size: 1rem;
                color: black;
                background-color: #E0E0E0;
                font-family: 'Merriweather', serif;
            }
        </style>
        <script>
            function show_database(str) {
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("message").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","+database_delete_operation(c).php?databasename="+str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <h2 align="center" style="color:red;"> DATABASE DELETE OPERATION </h2>
        <hr style="color:black"> <br>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $server = mysqli_connect($servername, $username, $password);

            $sql = "SHOW DATABASES";
            $query = mysqli_query($server, $sql);
            $n = mysqli_num_rows($query);
            $limit = floor($n/6);
            $limit = ($n%6==0)? $limit : ($limit + 1);
            
            echo("<table class='two'");
            for($i = 0; $i < $limit; $i++) {
                echo("<tr style='width:100%'>");
                for($j = 0; $j < 6; $j++) {
                    $row = mysqli_fetch_assoc($query);
                    if($row) {
                        $databasename = $row["Database"];
                        echo("<td> <button class='one' value='$databasename' onclick='show_database(this.value)'> $databasename </button> </td> ");
                    }
                }
                echo("</tr>");
            }
            echo("</table>");
            echo("<h2 id='message'> </h2>" );
            mysqli_close($server);
        ?>
    </body>
</html>