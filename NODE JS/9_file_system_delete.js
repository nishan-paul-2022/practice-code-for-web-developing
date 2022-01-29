var http = require("http");
var fs = require("fs");

http.createServer(

    function(req, res) {

        fs.unlink('file04.html',
            function(err) {
                if(err) throw err;
                res.writeHead( 200, {'Content-Type':'text/html'} );
                res.end('Deleted');
            }
        );
    }

).listen(8080);