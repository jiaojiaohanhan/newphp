
function A(){
	this.a=123;
	this.aa=function(){
		console.log('laoshan');
	}
}

//module.exports=A;   //module.exports = {}  类 数组
module.exports=[1,2,3,4,5]

/*
module.exports={
	aa:function(){
		console.log(123);
	}
*//*
exports={
	aa:function(){
		console.log(123);
	}
}*/
/*
exports={}

exports.aa=function(){
	console.log(123);
}*/

/*
var a=123;
var obj={
	'a':123
}

a=456;
obj.a=456;
obj={
	a:456;
}
console.log(a);
console.log(obj.a);*/