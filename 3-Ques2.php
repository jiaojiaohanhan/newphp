<meta charset="UTF-8">
<form action="3-Ques2.php" method="post">
    用户名：<input type="text" name="name"><br>
    密码:<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="登录">
    <input type="submit" name="can" value="注销">
</form>
<?php
session_start();
if(isset($_POST['sub'])) {
    $n = $_POST['name'];
    $p = $_POST['pass'];
    date_default_timezone_set("Asia/Shanghai");
    $t = time();
    if ($n != "" && $p != "") {
        $_SESSION['time'] = $t;
    };
    echo "登录成功";
}
if(isset($_POST['can'])){
    $t2 = time();
    echo "用户累计登录时间".$t2-$_SESSION['time'];
}
?>