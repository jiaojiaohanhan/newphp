<meta charset="utf-8">
<form action="2-Ques4.php" method="post">
    请输入标题内容和日期<br/>
    新闻标题：<input type="text" name="title"><br/>
    新闻内容：<input type="text" name="cont"><br/>
    新闻日期：<input type="date" name="date"><br/>
    <input type="submit" name="sub" value="提交">
</form>
<?php
    if(isset($_POST['sub'])){
        $d=array(
            "title"=>$_POST['title'],
            "cont"=>$_POST['cont'],
            "date"=>$_POST['date']
        );
        echo "<b>转换字符串结果：</b>";
        foreach($d as $i=>$v){
            echo $v."&nbsp;";
        }
    }
?>
