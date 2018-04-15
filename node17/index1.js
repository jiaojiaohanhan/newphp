var url=require('url');
var fs=require('fs');
var http=require('http');
exports.resIndex=function(req,res){
	res.writeHead(200,{'Content-type':'text/html'});
	var filename=__dirname+'/module/'+url.parse('form.html').pathname;
	var realpath=fs.readFileSync(filename,'utf-8');
	res.end(realpath);
}