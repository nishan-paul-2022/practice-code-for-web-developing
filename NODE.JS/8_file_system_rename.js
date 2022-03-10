var http = require("http");
var fs = require("fs");

http.createServer(

    function(req, res) {

        fs.rename('file02.html', 'file03.html',
            function(err) {
                res.writeHead( 200, {'Content-type':'text/html'} );
                if(err) throw err;
                res.end('File Renamed!');
            }
        );
    }

).listen(8080);