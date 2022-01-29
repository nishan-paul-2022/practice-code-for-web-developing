var http = require("http");
var fs = require("fs");

http.createServer(

    function(req, res) {

        fs.open("file05.html", "w",
            function(err) {
                if(err) throw err;
                res.writeHead( 200, {'Content-Type':'text/html'} );
                res.end('Write Mode');
            }
        );
    }

).listen(8080);