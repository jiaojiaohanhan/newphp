<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$mpass=md5($pass);
		
		$sql="select * from user where uname='$uname' and pass='$mpass'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
		if($rs){
			setcookie('uid',$rs['uid']);
			setcookie('name',$rs['uname']);
			echo "<script>location='index.php'</script>";
		}
	}

?>

<meta charset="utf-8">
<form action="login.php" method="post">
	用户名:<input type="text" name="uname"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">	
</form>