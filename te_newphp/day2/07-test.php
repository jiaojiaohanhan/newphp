<?php
	$arr['02-11']='外地出差';  
	$arr['03-23']='看美剧';
	$arr['04-21']='打游戏';
	
	$flag=false;
	$key="";
	if(isset($_POST['sub'])){
		$date=$_POST['date'];
		$darr=explode('-',$date);
		if(count($darr)==2){
			if(is_numeric($darr[0]) && is_numeric($darr[1])){
				if($darr[0]>=1 && $darr[0]<=12){
					if($darr[1]>=1 && $darr[1]<=31){
						foreach($arr as $k=>$v){
							if($k==$date){
								$flag=true;
								$key=$k;
							}
						}
						
						if($flag==true){
							$value=$arr[$key];
							
							echo "<script>alert('$value')</script>";
						}else{
							echo "<script>alert('无备忘')</script>";
						}
					}else{
						echo "<script>alert('日期不合法')</script>";
					}
				}else{
					echo "<script>alert('月份不正确')</script>";
				}
			}else{
				echo "<script>alert('输入不是数字')</script>";
			}
		}else{
			echo "<script>alert('输入不合法')</script>";
		}
	}


?>

<meta charset="utf-8">
<h3>单击查询当前日程</h3>
<form action="07-test.php" method="post">
	输入查询日期:<input type="text" name="date"><br />
	<input type="submit" name="sub" value="查询">&nbsp;&nbsp;
	<input type="reset" name="rst" value="重置">
</form>