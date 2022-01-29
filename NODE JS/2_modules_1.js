var http = require('http');
var dt = require('./1_modules');

http.createServer(

  function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write("The date and time are currently: " + dt.f());
    res.end();
  }

).listen(8080);