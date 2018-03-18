<?php
    Session_start();
    $_SESSION['name'];
    $_SESSION['pass'];
?>
<meta charset="utf-8">
<form action="2-Ques9.php" method="post">
    名称：<input type="text" name="name"><br>
    年龄：<input type="password" name="pass"><br>
    <input type="submit" name="sub" value="提交">
    <input type="submit" name='del' value='删除'>
</form>
<?php
    if(isset($_POST['sub'])){
        $_SESSION['name'] .= $_POST['name'] . " ";
        $_SESSION['pass'] .= $_POST['pass'] . " ";
        $a = explode(" ", $_SESSION['name']);
        $b = explode(" ", $_SESSION['pass']);
    };
    if(isset($_POST['del'])){
        $_SESSION['name'] .= "";
        $_SESSION['pass'] .= "";
        $a = explode(" ", $_SESSION['name']);
        $b = explode(" ", $_SESSION['pass']);
        if($a[count($a)-1]==""){
            array_pop($a);
            array_pop($a);
        }else{
            array_pop($a);
        };
        if($b[count($b)-1]==""){
            array_pop($b);
            array_pop($b);
        }else{
            array_pop($b);
        };
        $_SESSION['name'] = implode(" ",$a);
        $_SESSION['pass'] = implode(" ",$b);
        $a = explode(" ", $_SESSION['name']);
        $b = explode(" ", $_SESSION['pass']);
    };
    echo "<table width='500' align='center' border='1'>";
    for ($k = 0; $k < count($a); $k++) {
        if(!empty($a[$k])) {
            echo "<tr>";
            echo "<td>";
            echo $k + 1;
            echo "</td>";
            echo "<td>";
            echo $a[$k];
            echo "</td>";
            echo "<td>";
            echo $b[$k];
            echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
?>