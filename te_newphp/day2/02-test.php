<?php
	//索引数组 
	/*
	$user[]=1;
	$user[0]="laoshan";
	$user[]=19;
	$user[]="female";
	$user[]=array(1,2,3);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";*/
	
	//关联数组
	$user['id']=1;
	$user[]=66;
	$user['name']="laoshan";
	$user['age']=19;
	$user['gender']="male";
	$user[]=77;
	$user['email']="laoshan@163.com";
	$user['arr']=array(3,4,5);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	//array()
	$arr1=array(1,2,3,4);
	
	$arr=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>19,
	);
	
	echo $arr['name'];
	/*
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	echo "<br />";
	
	for($i=0;$i<20;$i++){
		$ur[$i]=$i;
	}
	
	var_dump($ur);*/
?>













