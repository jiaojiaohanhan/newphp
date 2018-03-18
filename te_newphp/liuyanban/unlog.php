<?php
	if(isset($_GET['uid'])){
		setcookie('uid','');
		setcookie('name','');
		echo "<script>location='index.php'</script>";
	}

?>