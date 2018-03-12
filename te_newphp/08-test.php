<?php
	//for处理99乘法表
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo " ".$i." * ".$j." = ".($i*$j);
		}
		
		echo "<br />";
	}
	
	echo "<br />";
	
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo " ".$i." * ".$j." = ".($i*$j);
			$j++;
		}
		echo "<br />";
		$i++;
	}

?>