<meta charset="UTF-8">
<form action="2-Ques12.php" method="post">
    请输入用户名：<input type="text" name="name"><br>
    <input type="submit" name="sub" value="提交">
</form>
<?php
    $n_c = array(
        array("name"=>"Bob","core"=>80),
        array("name"=>"Tom","core"=>90),
        array("name"=>"John","core"=>100)
    );
    if(isset($_POST['sub'])){
        $a = $_POST['name'];
        $j = 0;
        for($i=0;$i<count($n_c);$i++){
            if($a==$n_c[$i]['name']){
                echo $n_c[$i]['core'];
            }else{
                $j++;
            };
        };
        if($j==3){
            echo "没有找的此人的成绩";
        }
    }
?>