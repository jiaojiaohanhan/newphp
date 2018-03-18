<a href="add.php">添加文章</a>&nbsp;&nbsp;<a href="index.php">主页</a>&nbsp;&nbsp;
<?php
	if(isset($_COOKIE['uid'])){
		$uid=$_COOKIE['uid'];
		echo $_COOKIE['name']." 已登录 ";
		echo "&nbsp;&nbsp;";
		echo "<a href='unlog.php?uid=$uid'>注销</a>";
	}else{
		echo "<a href='login.php'>未登录</a>";
		
	}
?>
<form action="index.php" method="post">
	<input type="text" name="search">
	<input type="submit" name="sub" value="搜索">
</form>

<?php

	//http  get post delele put
	//get url form method=get a href

	include "conn.php";
	
	if(isset($_POST['sub'])){
		$se=$_POST['search'];
		//$sql="select * from blog where title like '%$se%'";
		$sname="title like '%".$se."%'";
		
		
	}else{
		$sname=1;
	}
	
	//拼查询字符串
	$sql="select * from blog where $sname order by bid desc";
	
	
	$query=mysqli_query($link,$sql);
	//var_dump($query);
	/*
	$arr=array(1,2,3,4);
	foreach($arr as $v){*/
	while($result=mysqli_fetch_array($query)){
?>
<h3><a href='all.php?id=<?php echo $result['bid']?>'>标题:<?php echo $result['title']?></a> |<a href="del.php?id=<?php echo $result['bid']?>">删除</a> |<a href="update.php?id=<?php echo $result['bid']?>">修改</a></h3>
<li>日期:<?php echo $result['time']?></li>
<p>内容:<?php echo iconv_substr($result['content'],0,3)?>......</p>
<hr />

<?php
	}
?>