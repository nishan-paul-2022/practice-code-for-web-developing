<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script>
            function f(str) {
                var tag = document.getElementById("one");
                if( str.length==0 ) {
                    tag.innerHTML = "";
                    return;
                } else {
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if( this.readyState==4 && this.status==200 ) {
                            tag.innerHTML += this.responseText;
                        }
                    };
                    xhr.open("GET", "ajax_php(c).php?q="+str, true);
                    xhr.send();
                }
            }
        </script>
    </head>
    <body>
        <?php

        ?>
        <form> <input type="text" onkeyup="f(this.value)"> SEARCH </form>
        <div id="one"> </div>
    </body>
</html>
<!-- The XMLHttpRequest object is a developers dream, because you can: -->
<!-- Update a web page without reloading the page -->
<!-- Request data from a server - after the page has loaded -->
<!-- Receive data from a server  - after the page has loaded -->
<!-- Send data to a server - in the background -->

<!-- xhr.onreadystatechange -->
<!-- this.responseText -->
<!-- this.readyState -->
<!-- this.status -->
