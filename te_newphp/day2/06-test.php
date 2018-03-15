<?php
	$user=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>19,
		'email'=>'aa@bb.com',
	);
	
	$arr=each($user);
	$arr=current($user);
	/*
	$arr=next($user);
	$arr=prev($user);
	$arr=next($user);
	$arr=reset($user);
	$arr=end($user);*/
	
	var_dump($arr);
	
	/*
	while($arr=each($user)){
		echo $arr[1]."<br />";
	}*/
	
	//var_dump($arr1);
	
	//192.168.0.1
	$ipstr="192.168.0.1";
	list($a,$b,$c,$d)=explode('.',$ipstr);
	echo $a;
	
	

?>











