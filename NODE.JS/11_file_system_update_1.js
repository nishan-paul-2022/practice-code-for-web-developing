var http = require("http");
var fs = require("fs");

http.createServer(

    function(req, res) {

        fs.appendFile("file06.txt", "metal",
            function(err) {
                if(err) throw err;
                res.writeHead( 200, {'Content-Type':'text/html'} );
                res.end('Append');
            }
        );
    }

).listen(8080);