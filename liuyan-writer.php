<?php
    include "liuyan1.php";
?>
<meta charset="utf-8">
<form action="liuyan-writer.php" method="post">
    请输入您要查询的作者姓名：<input type="text" name="name"><br>
    <input type="submit" name="sub" value="查询">
</form>
<?php
    if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $sql="select title from blog,user where user.uname='$name'and blog.w_id=user.uid";
        $query=mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($query))
        {
            echo $row['title']."<br>";
        }
    }
?>