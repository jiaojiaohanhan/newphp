<meta charset="utf-8">
<form action="2-Ques6.php" method="post">
    显示当前脚本的运行信息<br>
    <input type="submit" name="sub" value="显示">
</form>
<?php
if(isset($_POST['sub'])){
//        $c = count($_SERVER);
    echo "<table width='800' align='center' border='1'>";
    foreach($_SERVER as $k=>$v){
        echo "<tr>";
        echo "<td>";
        echo $k;
        echo "</td>";
        echo "<td>";
        echo $v;
        echo "</td>";
        echo "</tr>";
    }
    date_default_timezone_set('Asia/Shanghai');
    echo "<tr>";
    echo "<td>";
    echo "DATE & TIME";
    echo "</td>";
    echo "<td>";
    echo date("Y.m.d H:i");
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}
?>
