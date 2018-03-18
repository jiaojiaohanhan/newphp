<?php
	//$_COOKIE['ss']='jianshuo';
	setcookie('ss','jianshuo',time()-1);
	if(isset($_COOKIE['ss'])){
		echo "ok";
	}else{
		echo "error";
	}

	//$a="老谢你好";
	//$a="adfasd";
	//echo iconv_substr($a,0,3);
	
	//iconv urlencode json_encode json_decode 
	//JSON.parse JSON.stringfy eval

?>