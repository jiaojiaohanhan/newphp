<meta charset="UTF-8">
<form action="3-Ques1.php" method="post">
    用户名：<input type="text" name="name"><br>
    密码:<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="登录">
</form>
<?php
    if(isset($_POST['sub'])){
        $n = $_POST['name'];
        $p = $_POST['pass'];
        date_default_timezone_set("Asia/Shanghai");
        $t = date('Y m d H i s');
        if($n!="" && $p!=""){
            setcookie("name","$n",time()+3600);
            setcookie("pass","$p",time()+3600);
            setcookie("time","$t",time()+3600);
        }
        echo "用户登录时间";
        echo $_COOKIE["time"]."<br>";
        echo "<a href='3-Ques1.php'>注销返回</a>";
    }
?>