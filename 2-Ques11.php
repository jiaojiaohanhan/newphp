<meta charset="UTF-8">
<form action="2-Ques11.php" method="post">
    分组姓名一：<input type="text" name="name1"><br>
    分组姓名二：<input type="text" name="name2"><br>
    分组姓名三：<input type="text" name="name3"><br>
    <input type="submit" name="sub" value="提交">
</form>
<?php
    if(isset($_POST['sub'])){
        $a = $_POST['name1'];
        $b = $_POST['name2'];
        $c = $_POST['name3'];
        if($a==$b||$a==$c||$b==$c){
            echo "<script>alert('姓名有重复')</script>";
            header("2-Ques11.php");
        }else{
            echo "成功分组";
        }
    }
?>