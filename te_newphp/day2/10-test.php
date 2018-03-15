<?php
	$num=5;
	$start=0;
	$end=9;
	$count=0;
	
	while($count<5){
		$a[]=mt_rand($start,$end);
		$ary=array_unique($a); 
		$count=count($ary);
	}
	
	foreach($ary as $v){
		$str.=$v." ";
	}
	echo $str;
	
	


?>