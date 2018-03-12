<meta charset="utf-8">
<form action="2-Ques3.php" method="post">
    <input type="submit" name="sub" value="随机输出5个随机数">
</form>
<?php
    echo "随机数：";
    if(isset($_POST['sub'])){
        $a=array();
        $b=array();
        $count = 0;
        while($count<5){
            $a[] = mt_rand(0,9);
            $b = array_unique($a);
            $count = count($b);
        }
        foreach($b as $v){
            echo $v."&nbsp;";
        }
    }
?>
