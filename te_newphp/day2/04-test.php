<?php
	
	$user1=array(
		'id'=>1,
		'name'=>'laoshan',
		'age'=>19,
	);
	
	foreach($user1 as $k=>$v){
		echo $k."=>".$v."<br />";
	}
	
	echo "<br />";
	
	$user=array(1,'zhangsan',20,'male','aa@bb.com');
	
	for($i=0;$i<count($user);$i++){
		echo "\$user[$i]"."=".$user[$i]."<br />";
	}
	
	//foreach(数组名 as $k=>$v)
?>