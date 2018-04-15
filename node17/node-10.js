var fs=require('fs');
var http=require('http');
var url=require('url');

http.createServer(function(req,res){
	/*
	http://localhost:3000  ---index.html   /  index.html   /parse  parse.html  / 函数
	http://localhost:3000/parse
	http://localhost:3000/parse?id=1

	switch(url){
		case "/" :
			resIndex();
			break;
		case "/parse" :
			resImage();
			break;
		default :
			resError(res);
			break;
	}

	function resError(res){
		res.writeHead(404,{'Content-type':'text/plain'});
		res.end("do not find the page")
	}

	http://localhost/laoshan/index.php/welcome
	http://localhost/laoshan/index.php/   config/routes.php  [default-router]="welcome"

	req.url  req.headers req.method

	1:如何获取url路径  2：如何把路径对应到文件 */

	console.log(req.url);
	/*
	//index.html路径
	res.writeHead(200,{'Content-type':'text/html'});
	//console.log(__dirname);
	var readPath=__dirname+'/module/'+url.parse('index.html').pathname;
	var indePage=fs.readFileSync(readPath,'utf-8');
	res.end(indePage);
	//console.log(url.parse('index.html'));*/

}).listen(3000);

console.log('server start port 3000');

