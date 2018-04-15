//node Get操作
var http=require('http');
var url=require('url');
var querystring=require('querystring');

http.createServer(function(req,res){
	var paramstr=url.parse(req.url).query;
	var paramobj=querystring.parse(paramstr);
	console.log(paramobj);
	//console.log(paramstr);
	//var paramarr=paramstr.split('&');
	//console.log(paramarr);
}).listen(3000);

console.log('server start port 3000');