/*
var fs=require('fs');
var data=fs.readFileSync('./file.txt','utf-8');
console.log(data);
console.log("end");*/

/*
var fs=require('fs');
fs.readFile('./file.txt','utf-8',function(err,data){
	if(err){
		console.log(err);
	}else{
		console.log(data);
	}
});

console.log("end"); */

//读file.txt 停2S 结束

var fs=require('fs');
fs.readFile('./file.txt','utf-8',function(err,data){
	if(err){
		console.log(err);
	}else{
		//console.log(data);
		getData(data);
	}
});
console.log('end');

function getData(data){
	//console.log(data);
	
	setTimeout(returnData(data),2000);
}

function returnData(data){
	console.log(data);
}

/*
readFile('data',function(){
	xxFile('gaga',function(){
		xxFile('gaga',function(){
		
		})
	})
})*/










/*
Events FS Global Http path process querystring url util
buffer/stream/timer
exports module.exports

http://localhost/s?id=<script>alert(document.cookie)</script>
<img src="http://xx.com/sid=" id="img1">
escape()

$str="s?id=1&name=laoshan"; {id:1,name:'laoshan'}

var str="{'id':1,'name':'laoshan'}";
var strobj=eval("("+str+")");

JSON.parse()  JSON.stringfy();

$.post('user/login',{'id':1},function(data){

},'JSON');

echo json_encode($str);

responseText responseXML*/