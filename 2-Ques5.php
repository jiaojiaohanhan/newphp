<meta charset="utf-8">
<form action="2-Ques5.php" method="post">
    <h2>福利彩票号码自动生成器</h2>
    <input type="submit" name="sub" value="单击生成新的号码">
</form>
<?php
if(isset($_POST['sub'])){
    for($i=1;$i<6;$i++){
        echo "第".$i."注:";
        for($j=1;$j<8;$j++){
            echo mt_rand()%10000;
            echo "&nbsp;";
        }
        echo "<br/>";
    }
}
?>
