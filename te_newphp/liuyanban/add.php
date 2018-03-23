<?php 

	
	include "conn.php";

	if(!isset($_COOKIE['uid'])){
		//header('location:')
		//echo "<script>alert('未登录')</script>";
		//echo "<script>location='login.php'</script>";
		$url=$_SERVER['REQUEST_URI'];
		$arr=explode('/',$url);
		$len=count($arr)-1;
		$ruri=$arr[$len];
		echo "<script>location='login.php?url=$ruri'</script>";
		
	}

?>
<?php
	
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$cid=$_POST['fenlei'];
		$uid=$_COOKIE['uid'];
		//拼sql的字符串
		$sql="insert into blog(bid,title,content,time,uid,catalog_id) values(null,'$title','$con',now(),'$uid','$cid')";
		
		//把这个字符串发送给数据库
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>location='index.php'</script>";
		}else{
			echo "error";
		}
		//insert  update  delete 多少行受到了影响
		
		//select 返回结果集
	}

?>

<meta charset="utf-8">
<form action="add.php" method="post">
	标题:<input type="text" name="title">
	<select name="fenlei">
	<?php
		//查询分类
		$sql="select * from catalog";
		$query=mysqli_query($link,$sql);
		while($rs=mysqli_fetch_array($query)){
	?>
		<option value="<?php echo $rs['catalog_id']?>"><?php echo $rs['catalog_name']?></option>
	<?php
		}
	?>
	</select>
	<br />
	内容:<textarea cols=20 rows=10 name="con"></textarea><br />
	<input type="submit" name="sub" value="添加文章">
</form>