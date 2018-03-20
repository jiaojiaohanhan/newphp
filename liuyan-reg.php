<?php
    include "liuyan1.php";
?>
<meta charset="utf-8">
<form action="liuyan-reg.php" method="post">
    用户名：<input type="text" name="name"><br>
    密码：<input type="password" name="pass"><br>
    确认密码：<input type="password" name="repass"><br>
    <input type="submit" name="sub" value="提交">
</form>
<?php
    if(isset($_POST['sub'])){
        $n = $_POST['name'];
        $p = $_POST['pass'];
        $rp = $_POST['repass'];
        $sql = "select * from user where uname = '$n'";
        $query = mysqli_query($link,$sql);
        $rs = mysqli_fetch_array($query);
        if($rs){
            echo "<script>alert('用户名已存在')</script>";
            header("liuyan-reg.php");
        }else{
            if($p!=$rp){
                echo "<script>alert('密码有误')</script>";
                header("liuyan-reg.php");
            }else{
                $sql2 = "insert into user(uname,pass) values('$n','$p')";
                mysqli_query($link,$sql2);
            }
        }
    }
?>