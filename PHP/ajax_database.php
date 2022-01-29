<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script>
            function f(str) {
                var tag = document.getElementById("txt");
                if( str.length == 0 ) {
                    tag.innerHTML = "";
                    return;
                } else { 
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if(this.readyState == 4 && this.status == 200) {
                            tag.innerHTML = this.responseText;
                        }
                    };
                    xhr.open("GET","ajax_database(c).php?q="+str,true);
                    xhr.send();
                }
            }
        </script>
    </head>
    <body>
        <form>
            <select name="person" onchange="f(this.value)">
                <option value=""> SELECT A PERSON </option>
                <option value="1"> TESLA </option>
                <option value="2"> NISHAN </option>
                <option value="3"> SAIKAT </option>
                <option value="4"> SHIHAB </option>
                <option value="5"> ASHIK </option>
                <option value="6"> AYAN </option>
            </select>
        </form>
        <div id="txt"> </div>
    </body>
</html>