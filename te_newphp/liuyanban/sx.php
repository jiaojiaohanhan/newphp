<?php
	include "conn.php";
	if(isset($_GET['rid'])){
		$rid=$_GET['rid'];
		//$sid=$_COOKIE['uid'];
		//
	}
	
	if(isset($_POST['sub'])){
		$sxcon=$_POST['sxcon'];
		$rid=$_POST['rid'];
		$sid=$_COOKIE['uid'];
		$sql="insert into sx(sxid,sxcon,sxtime,sid,rid) values(null,'$sxcon',now(),'$sid','$rid')";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "OK";
		}else{
			echo "error";
		}
	}

?>
<meta charset="utf-8">
<form action="sx.php" method="post">
	<input type="hidden" name="rid" value="<?php echo $rid?>">
	<input type="text" name="sxcon"><br />
	<input type="submit" name="sub" value="私信">
</form>

<input type="button" id="b1" value="发件箱">

<script src="jquery.min.js"></script>
<script>
	
	$('#b1').click(function(){
		//alert('hello');
		var cstr=document.cookie;
		var astr=cstr.split(';');
		var auid=astr[0].split('=');
		//console.log(auid[1]);
		//console.log(astr);
		//var cid=document.cookie
		$.post('csx.php',"sid="+auid[1],function(data){
			console.log(data);
			//console.log(1);
			/*
			data.forEach(ss){
				console.log(ss);
			}*/
		},'text');
	});
</script>


