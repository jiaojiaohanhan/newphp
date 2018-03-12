<?php
    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h3>100h10ltable</h3></caption>";
    for($i=0;$i<100;$i++){
        if($i%2==0){
            $color="red";
        }else{
            $color="green";
        }
        echo "<tr bgcolor=$color onmouseout='lrow()'onmouseover='lcor()'/>";
    }
?>