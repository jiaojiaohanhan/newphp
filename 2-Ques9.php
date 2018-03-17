<?php
Session_start();
//    $_SESSION['name'] = array();
//    $_SESSION['pass'] = array();
?>
    <meta charset="utf-8">
    <form action="2-Ques9.php" method="post">
        名称：<input type="text" name="name"><br>
        密码：<input type="password" name="pass"><br>
        <input type="submit" name="sub" value="提交">
    </form>
<?php
$a = $_SESSION;
$b = $_SESSION;
if(isset($_POST['sub'])){
//        array_push($_SESSION['name'],$_POST['name']);
//        array_push($_SESSION['pass'],$_POST['pass']);
    array_push($a,$_POST['name']);
    array_push($b,$_POST['pass']);
}
echo "<table width='500' align='center' border='1'>";
for($k=0;$k<count($a);$k++){
    echo "<tr>";
    echo "<td>";
    echo $k;
    echo "</td>";
    echo "<td>";
    echo $a[$k];
    echo "</td>";
    echo "<td>";
    echo $b[$k];
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>