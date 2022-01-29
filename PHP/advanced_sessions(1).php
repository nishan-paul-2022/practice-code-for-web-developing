<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script>
            function f() {
                var int = "<?php echo 123; ?>";
                var float = "<?php echo 3.1416; ?>";
                var str = "<?php echo 'paul'; ?>";
                var velocity = "<?php echo $_SESSION['velocity']; ?>";
                var pi = "<?php echo $_SESSION['pi']; ?>";              
                var user = "<?php echo $_SESSION['user']; ?>"; 
                document.getElementById("one").innerHTML +=
                    "<br> integer: " + int +
                    "<br> float: " + float +
                    "<br> string: " + str +
                    "<br> $_SESSION['velocity']: " + velocity +
                    "<br> $_SESSION['pi']: " + pi +
                    "<br> $_SESSION['user']: " + user + "<hr>";
            }
        </script>
    </head>
    <body>
        <button> <a href="advanced_sessions(2).php" style="text-decoration:none;"> UNSET VELOCITY </a> </button> <br>
        <button onclick="f()"> SHOW </button> <br>
        <span id="one"> </span>
    </body>
</html>