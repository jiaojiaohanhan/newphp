<?php
//  四大关键字 get post put delete
//  四个标量类型 int float string bool
//  两个复合类型 array OBJECT
//  两个特殊类型 null resource
//  三种输出 echo print_r vat_dump
//  几种全局数组 $_POST $_GET $_COOKIE $_SESSION $_SERVER $_ENV $_FILES
//npm moment
//underscore
echo phpinfo();
//    if(isset($_POST['sub'])){
//        $pass=$_POST['pass'];
//        echo $pass;
//        echo "<br/>";
//        $ppass=md5($pass);
//        echo $ppass;
//        md5(md5($pass)+$salt);
//    }
//    if(isset($_POST['sub'])){
//        $url = $_POST['url'];
//        $eurl = base64_encode($url);
//        $eurl2 = base64_decode($eurl);
//        $nurl = urlencode($url);
//        $nurl2 = urldecode($nurl);
//        substr();
//        iconv_substr();
//    }
?>
<meta charset="utf-8">
<form action="01_test.php" method="post">
    密码：<input type="text" name="pass">
    <input type="submit" name="sub" value="提交">
</form>
