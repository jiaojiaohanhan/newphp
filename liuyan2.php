<?php
    include "liuyan1.php";
    if(isset($_POST['sub'])){
        $title = $_POST['title'];
        $con = $_POST['con'];
        //拼SQL的字符串
        $sql = "insert into blog(bid,title,content,time) values(null,'$title','$con',now())";
        //发送SQL字符串给数据库
        $query = mysqli_query($link,$sql);
        if($query){
            echo "<script>location='liuyan3.php'</script>";
        }else{
            echo "出现错误";
        }
        //insert update delete 多少行受到影响
        //select 返回结果集
    }
?>
<meta charset="utf-8">
<form action="liuyan2.php" method="post">
    标题：<input type="text" name="title"><br>
    内容：<textarea cols="20" rows="10" name="con"></textarea><br>
    <input type="submit" name="sub" value="发表文章">
</form>
