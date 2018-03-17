<meta charset="utf-8">
<form action="2-Ques8.php" method="post">
    根据排名显示不同颜色的排名<br>
    <input type="submit" name="sub" value="显示">
</form>
<?php
if(isset($_POST['sub'])){
    $a = array(99,22,88,66,77,33,55,11,44);
    sort($a);
    $color = "";
    echo "<table width='500' align='center' border='1'>";
    for($i=0;$i<count($a);$i++){
        if($i==0){
            $color = "red";
        }elseif($i==1){
            $color = "yellow";
        }elseif($i==2){
            $color = "blue";
        }else{
            $color = "gray";
        }
        echo "<tr bgcolor=$color>";
        echo "<td>";
        echo $i+1;
        echo "</td>";
        echo "<td>";
        echo $a[$i];
        echo "</td>";
    }
    echo "</table>";
}
?>