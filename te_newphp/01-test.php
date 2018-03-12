<?php
	//echo 123;
	//$num=2018;
	/*
	if(isset($_POST['sub'])){
		//echo 123;
		echo "<pre>";
		var_dump($_POST);
		echo "</pre>";
	}*/
	
	
	//$_POST $_GET  $_COOKIE $_SESSION $_SERVER

	//http四大关键字 get post put delete
	//get post buffer utf-8
	//php文件html css js  php
	/*
	四个标量类型  int float string bool
	两个复合类型 array OBJECT   
	两个特殊类型 null resource
	
	echo print_r  var_dump*/

?>

<?php 
	
	//$user['name']="laoshan";
	//echo \$user['name'];
	
	//echo "$user['name']";
	//$user=laoshan
	
	//$num="laoshan";
	//echo "名字叫".'$num';
	//$num="sdhf123kjhsdk";
	//var_dump($num);
	//$num=$num+1;
?>

<meta charset="utf-8">
<form action="01-test.php" method="post">
	number:<input type="text" name="num" value="<?php echo $num;?>">
	用户名:<input type="text" name="uname"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">	
</form>

<?php
	echo $num;
?>


