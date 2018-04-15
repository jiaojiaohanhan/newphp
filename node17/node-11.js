var http=require('http');
var fs=require('fs');
var url=require('url');

http.createServer(function(req,res){
	console.log(req.url);
	//console.log(req.method);
	//console.log(req.headers);
	//var pathname=url.parse(req.url);
	//console.log(pathname);

	var pathname=url.parse(req.url).pathname;

	if('/favicon.ico'==pathname){
		return;
	}

	switch(pathname){
		case '/' :
			resIndex(req,res);
			break;
		case '/img' :
			resImage(req,res);
			break;
		default :
			resError(res);
			break;
	}
}).listen(3000);

function resError(res){
	res.writeHead(404,{'Content-type':'text/plain'});
	res.end("don't find the page");
}

function resIndex(req,res){
	res.writeHead(200,{'Content-type':'text/html'});
	var filepath=__dirname+'/module/'+url.parse('index.html').pathname;
	var realpath=fs.readFileSync(filepath,'utf-8');
	res.end(realpath);
}

function resImage(req,res){
	res.writeHead(200,{'Content-type':'image/jpeg'});
	var filepath=__dirname+'/module/'+url.parse('123.jpg').pathname;
	var realpath=fs.readFileSync(filepath);
	res.end(realpath);
}


console.log('server start port 3000');