<?php
session_start();
$_SESSION['a'];
$_SESSION['b'];
?>
<meta charset="utf-8">
<form action="2-Ques9-test.php" method="post">
    名称：<input type="text" name="name"><br>
    密码：<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="提交">
</form>
<?php
if(isset($_POST['sub'])){
    $_SESSION['a'][]=array($_POST['name']);
    $_SESSION['b'][]=array($_POST['pass']);
    echo "<table width='500' align='center' border='1'>";
    for($k=0;$k<count($_SESSION['a']);$k++){
        if(!empty($_SESSION['a'][$k])){
            echo "<tr>";
            echo "<td>";
            echo $k+1;
            echo "</td>";
            for($l=0;$l<count($_SESSION['a'][$k]);$l++){
                echo "<td>";
                echo $_SESSION['a'][$k][$l];
                echo "</td>";
            }
            for($l=0;$l<count($_SESSION['b'][$k]);$l++){
                echo "<td>";
                echo $_SESSION['b'][$k][$l];
                echo "</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>