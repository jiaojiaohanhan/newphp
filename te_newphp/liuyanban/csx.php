<?php
	include "conn.php";
	if(isset($_POST['sid'])){
		$sid=$_POST['sid'];
		$sql="select * from sx where sid='$sid'";
		$query=mysqli_query($link,$sql);
		//$arr=array();
		$str="";
		while($rs=mysqli_fetch_array($query)){
			//$arr[]=$rs['sxcon'];
			$str.=$rs['sxcon']."-";
		}
		//var_dump($arr);
		//var_dump($rs);
		//echo json_encode(json_encode($arr));
		echo $str;
	}

?>