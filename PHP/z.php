<html>
    <head>
        <title>Check Height, Width and the Type of Image before Uploading</title>
        <script>
            function preview(e, flag) {
                if( e.files[0] ) {
                    var reader = new FileReader();
                    if( !flag )
                        reader.onload = function(e) { document.querySelector("#three").setAttribute("src", e.target.result); };
                    else
                        reader.onload = function(e) { document.querySelector("#four").setAttribute("src", e.target.result); };
                    reader.readAsDataURL( e.files[0] )
                }
            }
            function checkFileDetails(fi, flag) {
                if( fi.files[0] ) {                
                    var fileName = fi.files[0].name;
                    var fileExtension = fileName.replace(/^.*\./, '');
                    var fileSize = fi.files[0].size / (1024*1024);
                    if( filesize <= 10 && (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg' || fileExtension == 'webp') ) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var img = new Image();      
                            img.src = e.target.result;
                            img.onload = function () {
                                document.getElementById('fileInfo').innerHTML =
                                    'Name: <b>' + fileName + '</b> <br />' +
                                    'File Extension: <b>' + fileExtension + '</b> <br />' +
                                    'Size: <b>' + fileSize + '</b> KB <br />';
                            }
                        };
                        reader.readAsDataURL(fi.files[0]);
                    }
                }
            }
        </script>
    </head>

    <body>
        <input type="file" id="file" onchange="checkFileDetails(this, 0)" />
        <p id="fileInfo"></p>
    </body>
</html>