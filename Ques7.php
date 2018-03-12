<meta charset="utf-8">
<?php
    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h2>100行10列的表格</h2></caption>";
    for($i=1;$i<=100;$i++){
        if($i%2==0){
            $color="aqua";
            echo "<tr bgcolor='$color' onmouseover='over(this)' onmouseout='out(this)'>";
            for($j=1;$j<=10;$j++){
                echo "<td>";
                echo $j;
                echo "</td>";
            }
            echo "</tr>";
        }else{
            $color="blue";
            echo "<tr bgcolor='$color' onmouseover='over(this)' onmouseout='out(this)'>";
            for($j=1;$j<=10;$j++){
                echo "<td>";
                echo $j;
                echo "</td>";
            }
            echo "</tr>";
        }
    }
?>
<script>
    var color="";
    function over(bg){
        color = bg.bgColor;
        bg.bgColor = "red";
    };
    function out(bg){
        bg.bgColor = color;
    };
</script>

