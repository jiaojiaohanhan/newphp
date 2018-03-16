<meta charset="utf-8">
<form action="2-Ques1.php" method="post" enctype="multipart/form-data">
    检测文件名后缀<br/>
    <input type="file" name="file" value="选择文件"><br/>
    <input type="submit" name="sub" value="检测">
</form>
<?php
if(isset($_POST['sub'])){
    $a = explode(".",$_FILES['file']['name']);
    echo $a[count($a)-1];
}
?>
