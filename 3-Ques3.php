<meta charset="utf-8">
<form action="3-Ques3.php" method="post">
    用户名：<input type="text" name="name"><br>
    密码：<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="登录">
</form>
<?php
    session_start();
    $_SESSION['times'];
    if(isset($_POST['sub'])){
        $_SESSION['times']++;
        echo "您的登录次数为".$_SESSION['times'];
    }
?>