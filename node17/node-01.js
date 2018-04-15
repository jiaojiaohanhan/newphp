
function aa(){
	console.log(5);
}

var aa=undefined;

var aa=function(){
	console.log(4);
}


aa();

//作用域 预编译 v8
//1：预编译  var function
//2：按照文档顺序执行

//node -v  7.0 koa2  
//node  js文件名  
/*
如果我想使用node文档下的函数
1：如果这个类在global 
2：加载类  require  ----commonJS   require(加载) exports/module.exports(导出)
require()  自定义模块、系统模块、第三方模块

node  web框架  Express/koa2

第三方模块
1：先安装模块   （全局安装/当前目录安装）

npm install -g vue-cli
npm install -g bower 
npm isntall -g supervisor /pm2
npm install request   node_module package.json

cmd shell powershell git-shell

npm install -g bower
bower install bootstrap 

npm node软件包 包管理系统  

redhat  rpm   yum CentOS

debian apt-get Ubuntu 

process.nextTick(function(){
	
},1000);

setTimeout(function(){
	
},2000);

*/
/*
<script src="1.js"></script>
<script src="2.js"></script>
<script src="3.js"></script>
1.js
a=123;
2.js
a=456;
console.log(a*/


function A(){
	var a="老单";  //private
	this.aa=function(){  //public
		console.log(a);
	}
}

var a=new A();
//a.a="laoxie";
a.aa();