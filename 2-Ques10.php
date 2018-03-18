<meta charset="utf-8">
<form action="2-Ques10.php" method="post" enctype="multipart/form-data">
    <label for="file">选择文件:</label>
    <input type="file" name="file"/>
    <br />
    <input type="submit" name="sub" value="提交" />
</form>
<?php
    if(isset($_POST['sub'])){
        echo $_FILES["file"]["name"]."<br>";
        $a = explode(".",$_FILES["file"]["name"]);
        $b = $a[count($a)-1];
        echo $b."<br>";
        echo ceil($_FILES["file"]["size"]/1000)."<span>KB</span>";
    }
?>