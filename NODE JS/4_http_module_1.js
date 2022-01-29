var a = require("http");

a.createServer(

    function(req, res) {
        res.writeHead( 200, {'Content-Type': 'text/html'} )
        res.write("TDK");
        res.end();
    }

).listen(8080);