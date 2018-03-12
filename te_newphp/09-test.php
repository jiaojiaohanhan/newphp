<?php
	/*
	$a=20;
	$b=$a++ + ++$a;  //20+22 42
	
	$c=--$b - $b--; //0
	
	$d=$c++ - --$c; //0
	
	$e=$d-- + ++$d; //0
	echo $e;
	
	$one=100;
	$two=&$one;
	
	$two="hello";
	echo $one;
	echo "<br />";
	echo $two;*/



	echo "<table width=800 align=center border=1>";
	echo "<caption>九九乘法表</caption>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j);
			echo "</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	echo "<br />";
	
	echo "<table width=800 align=center border=1>";
	echo "<caption>九九乘法表</caption>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j);
			echo "</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	
	echo "<br />";
	
	echo "<table width=800 align=center border=1>";
	echo "<caption>九九乘法表</caption>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		//先打空格
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";
			echo "&nbsp;";
			echo "</td>";
		}
		
		//再打算式
		for($m=1;$m<=$i;$m++){
			echo "<td>";
			echo $i." * ".$m." = ".($i*$m);
			echo "</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
	

	
?>












