<a href="index.php">回到主页</a>
<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$sql="update blog set hits=hits+1 where bid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			$sql="select * from blog where bid='$id'";
			$query=mysqli_query($link,$sql);
			$rs=mysqli_fetch_array($query);
		}
	}

?>

<h3>标题:<?php echo $rs['title']?></h3><a href="sx.php?rid=<?php echo $rs['uid']?>">私信</a>
<li>时间:<?php echo $rs['time']?></li>
<li>访问数:<?php echo $rs['hits']?></li>
<p>内容:<?php echo $rs['content']?></p>
<hr />
<?php
	if(isset($_POST['sub'])){
		$pl=$_POST['pl'];
		$uid=$_COOKIE['uid'];
		$bid=$_GET['id'];
		$sql="insert into pl(plid,pcon,ptime,uid,bid) values(null,'$pl',now(),'$uid','$bid')";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "OK";
		}else{
			echo "error";
		}
	}

?>

<form action="all.php?id=<?php echo $id?>" method="post">
	<textarea cols=20 rows=5 name="pl"></textarea><br />
	<input type="submit" name="sub" value="评论">
</form>

<?php
	if(isset($_GET['id'])){
		$bid=$_GET['id'];
		
		$sql="select * from pl,blog,user where pl.uid=`user`.uid and blog.bid=pl.bid and pl.bid='$bid'";
		
		$query=mysqli_query($link,$sql);
		//$rs=mysqli_fetch_array($query);
		//var_dump($rs);
		//die();
		while($rs=mysqli_fetch_array($query)){
	
?>
<p><?php echo $rs['pcon']?></p><br />
<li><?php echo $rs['ptime']?></li><br />
<li><?php echo $rs['uname']?></li>
<hr />
<?php
	}}
?>






