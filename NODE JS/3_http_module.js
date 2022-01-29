var a = require("http");

a.createServer(
    function(req, res) {
        res.write("hello world");  // write a response to the client
        res.end(); // end the response
    }
).listen(8080);