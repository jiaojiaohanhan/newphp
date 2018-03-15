<?php
	//声明二维数组
	$user=array(
		array(1,'zhangsan',20,'male'),
		array(2,'lisi',25,'male'),
		array(3,'wangwu',24,'female'),
	);
	
	
	echo $user[1][1];
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	
	$str=`netstat -an`;
	echo $str;

?>