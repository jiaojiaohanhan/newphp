<?php
	//文件上传功能
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		
		
		//"tmp_name"
		
		$urlname=$sfile['name'];
		$arr=explode('.',$urlname);
		$len=count($arr)-1;
		$hou=$arr[$len];
		
		$flag=false;
		$newarr=array('txt','exe','pdf');
		for($i=0;$i<count($newarr);$i++){
			if($hou==$newarr[$i]){
				$flag=true;
			}
		}
		
		if($flag==true){
			echo "<script>alert('后缀名非法')</script>";
		}else{
			//echo 123;
			//移动文件到上传目录
			$baseurl=$sfile['tmp_name'];
			
			//随机不重复的文件名
			$newurl='./upload/'.time().'laoshan'.'.'.$hou;
			
			
			$bb=move_uploaded_file($baseurl, $newurl);
			if($bb){
				echo "success";
			}else{
				echo "error";
			}
		}
		
		
	}


?>


<meta charset="utf-8">
<form action="07-test.php" method="post" enctype="multipart/form-data">
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>