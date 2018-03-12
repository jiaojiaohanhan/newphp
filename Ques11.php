<?php
    if(isset($_POST['sub'])){
        $sel=$_POST['sel'];
    }
?>
<meta charset="utf-8">
<form action="Ques11.php" method="post">
    你出拳:<select name="sel">
        <option value="0" <?php echo $sel=='0'?'selected':'';?>>剪子</option>
        <option value="1" <?php echo $sel=='1'?'selected':'';?>>石头</option>
        <option value="2" <?php echo $sel=='2'?'selected':'';?>>布</option>
    </select>
    <input type="submit" name="sub" value="提交">
</form>
<?php
    if(isset($_POST['sub'])){
        $r=rand(10,100);
        if($r>=10 && $r<40){
            $c=0;
        }else if($r>=40 && $r<70){
            $c=1;
        }else if($r>=70 && $r<100){
            $c=2;
        }else{
            $c=3;
        }
//        $sel=$_POST['sel'];
        if(($sel==0&&$c==1)||($sel==1&&$c=2)||($sel==2&&$c==0)){
            echo "电脑赢了";
        }elseif(($c==0&&$sel==1)||($c==1&&$sel=2)||($c==2&&$sel==0)){
            echo "您赢了";
        }else{
            echo "平局";
        }
    }
?>