<?php
	$strs="外面的世界很精彩";
	echo iconv_substr($strs,0,3);


	if(isset($_POST['sub'])){
		
		$url=$_POST['url'];
		//echo $url;
		//$eurl=base64_encode($url);
		//echo "thunder://".$eurl;
		$str=substr($url,10);
		echo base64_decode($str);
		//thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
		
		/*
		$pass=$_POST['pass'];
		echo $pass;
		echo "<br />";
		$ppass=md5($pass);
		echo $ppass;*/
		
		//http://www.163.com/1.rmvb
		
		//thunder://dsjkfhjkzv jkhsdjl==
		
		
		
		//md5(md5($pass)+$salt);
		
		//md5 rsa rc6 sha-1
		//12345
		//827ccb0eea8a706c4c34a16891f84e7b
		//laoshanloveslaoxie
		//f86adeb7e175fbfb2c0a9b5c408ff9d7
	}

?>

<meta charset="utf-8">
<form action="04-test.php" method="post">
	地址转换:<input type="text"  name="url">
	<input type="submit" name="sub" value="转换">
</form>