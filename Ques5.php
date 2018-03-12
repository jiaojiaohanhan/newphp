<?php
    echo "<h2>输入分数查询成绩</h2>";
?>
<meta charset="utf-8">
<form action="Ques5.php" method="post">
    分数：<input type="text" name="fs">
    <input type="submit" name="submit" value="提交查询">
    <input type="reset" name="reset" value="重置分数">
</form>
<?php
    if(isset($_POST['submit'])){
        $fs=$_POST['fs'];
        if(is_numeric($fs)){
            if($fs<=100 && $fs>=80){
                echo "<script>alert('您的成绩为优秀')</script>";
            }else if($fs<80 && $fs>=60){
                echo "<script>alert('您的成绩为及格')</script>";
            }else if($fs<60 && $fs>=0){
                echo "<script>alert('您的成绩不及格')</script>";
            }else{
                echo "<script>alert('您的输入有误')</script>";
            }
        }else{
            echo "<script>alert('您的输入有误')</script>";
        }
    }
?>
