<?php
	if(isset($_POST['sub'])){
		$year=$_POST['year'];
		if(is_numeric($year)){
			if(strlen($year)>0 && strlen($year)<=4){
				if($year % 400==0 || ($year % 100 != 0 && $year % 4==0)){
					echo $year."是闰年";
				}else{
					echo $year."不是闰年";
				}
			}else{
				echo "输入长度有误";
			}
			
		}else{
			
			
			echo "<script>alert('输入非法')</script>";
			//echo "<script>location='07-test.php'</script>";
			header('location:07-test.php');
		}
		
		
	}
	

?>

<meta charset="utf-8">
<form action="06-test.php" method="post">
	输入年份:<input type="text" name="year">
	<input type="submit" name="sub" value="提交">

</form>