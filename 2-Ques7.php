<meta charset="utf-8">
<form action="2-Ques7.php" method="post">
    根据年份对商品进行排序<br>
    <input type="submit" name="sub1" value="降序">
    <input type="submit" name="sub2" value="升序">
</form>
<?php
$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
if(isset($_POST['sub1'])){
    $cen = array();
    $s = array();
    for($i=0;$i<count($arr);$i++){
        $s[$i] = explode(" ", $arr[$i]);
        $cen[] = $s[$i][0];
    }
    rsort($cen);
    echo "<table width='500' align='center' border='1'>";
    for($j=0;$j<count($cen);$j++){
        echo "<tr>";
        echo "<td>";
        echo $j+1;
        echo "</td>";
        for($i=0;$i<count($arr);$i++){
            if($s[$i][0]==$cen[$j]){
                echo "<td>";
                echo $arr[$i];
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
if(isset($_POST['sub2'])){
    $cen = array();
    $s = array();
    for($i=0;$i<count($arr);$i++){
        $s[$i] = explode(" ", $arr[$i]);
        $cen[] = $s[$i][0];
    }
    sort($cen);
    echo "<table width='500' align='center' border='1'>";
    for($j=0;$j<count($cen);$j++){
        echo "<tr>";
        echo "<td>";
        echo $j+1;
        echo "</td>";
        for($i=0;$i<count($arr);$i++){
            if($s[$i][0]==$cen[$j]){
                echo "<td>";
                echo $arr[$i];
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>