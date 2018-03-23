<?php
	include "conn.php";
	if(isset($_POST['name'])){
		$name=$_POST['name'];
		$sql="select * from user where uname='$name'";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "重名";
		}else{
			echo "不重名";
		}
	}

?>