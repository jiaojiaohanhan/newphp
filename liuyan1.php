<?php
//1.创建数据库连接
//phpinfo();
$link = @mysqli_connect("localhost","root","x3558sv7384o") or die("数据库连接失败");
//2.选择数据库
@mysqli_select_db($link,"liuyanban") or die("选择数据库失败");
//3.设置数据库传输编码
mysqli_set_charset($link,"utf-8");
?>