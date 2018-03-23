<?php


?>

<meta charset="utf-8">
<form action="sreg.php" method="post">
	username:<input type="text" id="u1"><br />
	<input type="submit" name="sub" value="注册">
</form>

<script src="jquery.min.js"></script>
<script>
	$('#u1').blur(function(){
		var str=$(this).val();
		$.post('checkname.php','name='+str,function(data){
			console.log(data);
		},'text');
	});
</script>