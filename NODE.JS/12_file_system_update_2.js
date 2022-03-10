var http = require("http");
var fs = require("fs");

http.createServer(

    function(req, res) {

        fs.writeFile("file07.txt", "Chris nolan",
            function(err) {
                if(err) throw err;
                res.writeHead( 200, {'Content-Type':'text/html'} );
                res.end('Override');
            }
        );
    }

).listen(8080);