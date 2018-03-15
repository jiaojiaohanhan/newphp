<meta charset="utf-8">
<form action="2-Ques1.php" method="post">
    检测文件名后缀<br/>
    <input type="file" name="file" value="选择文件"><br/>
    <input type="submit" name="sub" value="检测">
</form>
<?php
    if(isset($_POST['sub'])){
            $f=array();
            $f[]=$_FILES['file'];
            for($i=0;$i<count($f);$i++){
                $s=$f[$i];
                $l=explode(".",$s);
                echo $l[1];
            }
    }
?>
