<?php
	$arr_all=array();
	for($i=1;$i<=5;$i++){
		echo "第".$i."注:";
		$arr_all[$i]=array();
		for($j=1;$j<=7;$j++){
			$random=mt_rand(1,30);  
			//$arr[$i][$j]=$random
			//1:判断随机数据是不是重复
			if(in_array($random,$arr_all[$i])){
				//2:$j减回来
				$j--;
				continue;
			}else{
				$arr_all[$i][$j]=$random;
				if($j<7){
					echo $arr_all[$i][$j].",";
				}else{
					echo $arr_all[$i][$j];
				}
			}
		}
		
		echo "<br />";
	}


?>