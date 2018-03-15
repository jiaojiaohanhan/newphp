<?php
	//isset empty unset
	//is_numeric($var)
	/*
	$name="laoshan";
	var_dump($name);
	echo "<br />";
	//die();
	unset($name);
	var_dump($name);*/
	
	/*
	$arr=array(1,2,3,4);
	print_r($arr);

	echo "<br />";
	unset($arr[0]);
	print_r($arr);*/
	
	//类型转换 
	//1:int->string   string->int  settype/gettype
	$num="123";
	var_dump($num);
	echo "<br />";
	$strnum=(int)$num;
	var_dump($strnum);
	
	//2:array->string  string->array char[] int[]
	$str="laoxielaoshan";
	$arr=array();
	for($i=0;$i<strlen($str);$i++){
		$arr[$i]=$str[$i];
	}
	
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	echo "<br />";
	
	$arr=array('x','i','a','o');
	$str="";
	for($i=0;$i<count($arr);$i++){
		$str.=$arr[$i];
	}
	
	
	echo $str;
	
	echo"<br />";
	//array->object  json_encode  object->array json_decode
	
	//unserialize serialize  string->object  object->string
	
	/*
	$.post('user/login',{'name':'laoshan'},function(data){
		
	},'text')  text xml json*/
	
	//bit byte int  2 4 8 
	
	

?>











