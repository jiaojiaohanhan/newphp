<?php
	//100行10列表格
	
	echo "<table width=800 align='center' border='1'>";
	echo "<caption><h3>100行10列表格</h3></caption>";
	for($i=0;$i<100;$i++){
		if($i%2==0){
			$color="red";
		}else{
			$color="green";
		}
		echo "<tr bgColor=$color onmouseout=lrow(this) onmouseover=lcol(this)>";
		for($j=0;$j<10;$j++){
			echo "<td>";
			echo $j;
			echo "</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>";

?>

<script>
	var color="";
	function lrow(bg){
		bg.bgColor=color;
	}
	
	function lcol(bg){
		color=bg.bgColor;
		bg.bgColor="pink";
	}

</script>



