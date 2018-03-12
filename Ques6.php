<?php
    echo "<h2>输入行列生成表格</h2>";
?>
<meta charset="utf-8">
<form action="Ques6.php" method="post">
    输入行：<input type="text" name="hang">
    输入列：<input type="text" name="lie">
    <input type="submit" name="sub" value="生成表格">
    <input type="reset" name="res" value="重置行列">
</form>
<?php
    if(isset($_POST['sub'])){
        $h=$_POST['hang'];
        $l=$_POST['lie'];
        echo "<table width='800' align='center' border='1'>";
        echo "<caption><h2>用户动态输出表格，行'$h'，列'$l'</h2></caption>";
        for($i=1;$i<=$h;$i++){
            if($i%2==0){
                echo "<tr bgcolor='aqua'>";
                for($j=1;$j<=$l;$j++){
                    echo "<td>";
                    echo $j;
                    echo "</td>";
                }
                echo "</tr>";
            }else{
                echo "<tr bgcolor='red'>";
                for($j=1;$j<=$l;$j++){
                    echo "<td>";
                    echo $j;
                    echo "</td>";
                }
                echo "</tr>";
            }
        }
    }
?>