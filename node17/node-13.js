//node post操作
var http=require('http');
var fs=require('fs');
var url=require('url');
var querystring=require('querystring');
var dns=require('dns');
//以上所有类都由Events类派生而来，可以使用Events类中的方法

var Index=require('./index1.js');

http.createServer(function(req,res){
	var pathname=url.parse(req.url).pathname;
	if('/favicon.ico'==pathname){
		return;
	}

	switch(pathname){
		case '/' :
			//resIndex(req,res);
			Index.resIndex(req,res);
			break;
		case '/parse' :
			resAdd(req,res);
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

/*
function resIndex(req,res){
	res.writeHead(200,{'Content-type':'text/html'});
	var filename=__dirname+'/module/'+url.parse('form.html').pathname;
	var realpath=fs.readFileSync(filename,'utf-8');
	res.end(realpath);
}*/

function resAdd(req,res){
	var postData="";
	req.setEncoding('utf8');
	req.addListener('data',function(postDataChunk){
		postData+=postDataChunk;
	});

	req.addListener('end',function(){
		//console.log(postData);
		var param=querystring.parse(postData);
		dns.resolve4(param.search_dns,function(err,addresses){
			if(err){
				console.log(err);
			}else{
				res.writeHead(200,{'Content-type':'text/plain'});
				//res.end(addresses[0]);
				res.end(querystring.stringify(addresses));
			}
		})
		//console.log(param.search_dns);
	});

}

console.log('server start port 3000');