<?php
	//echo time();
	//mktime()
	//echo date('t',time());
	//echo date('w',mktime(0,0,0,3,1,2018));
	if(isset($_POST['sub'])){
		unset($_POST['sub']);
		
		$str=implode(',',$_POST);
		echo $str;
	}
	
	

?>
<meta charset="utf-8">
<h3>请输入标题内容时间</h3>
<form action="08-test.php" method="post">
	新闻标题:<input type="text" name="title"><br />
	新闻内容:<input type="text" name="content"><br />
	新闻时间:<input type="text" name="date"><br />
	<input type="submit" name="sub" value="提交">
</form>

