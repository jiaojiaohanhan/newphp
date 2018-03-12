<?php
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		
		if($uname=="admin" and $pass=="12345"){
			echo "<script>alert('login success')</script>";
		}else{
			echo "<script>alert('error')</script>";
		}
	}

?>

<meta charset="utf-8">
<form action="02-test.php" method="post">
	number:<input type="text" name="num" value="<?php echo $num;?>">
	用户名:<input type="text" name="uname"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">	
</form>