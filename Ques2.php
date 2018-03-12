<?php
//    echo "...第一种乘法表...";
//    echo "<br/>";
//    for($i=1;$i<10;$i++){
//        for($j=1;$j<=$i;$j++){
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp";
//        }
//        echo "<br/>";
//    }

//    echo "...第二种乘法表...";
//    echo "<br/>";
//    for($i=9;$i>0;$i--){
//        for($j=1;$j<=$i;$j++){
//        echo $i."*".$j."=".$i*$j;
//        echo "&nbsp";
//        }
//    echo "<br/>";
//    }

//    echo "...第三种乘法表...";
//    echo "<br/>";
//    $l=1;
//    for($i=9;$i>0;$i--){
//        for($j=1;$j<=$i;$j++){
//            if($j==1){
//                for($k=1;$k<$l;$k++){
//                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
//                };
//                $l++;
//            }
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp";
//        }
//        echo "<br/>";
//    }

//    echo "...第四种乘法表...";
//    echo "<br/>";
//    $l=9;
//    for($i=1;$i<10;$i++){
//        for($j=1;$j<=$i;$j++){
//            if($j==1){
//                for($k=1;$k<$l;$k++){
//                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
//                };
//                $l--;
//            }
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp";
//        }
//        echo "<br/>";
//    }

    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h2>...第一种乘法表...</h2></caption>";
    for($i=1;$i<10;$i++){
        echo "<tr>";
            for($j=1;$j<=$i;$j++){
                echo "<td>";
                echo $i."*".$j."=".$i*$j;
                echo "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";

    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h2>...第二种乘法表...</h2></caption>";
    for($i=9;$i>0;$i--){
        echo "<tr>";
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i."*".$j."=".$i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h2>...第三种乘法表...</h2></caption>";
    for($i=9;$i>0;$i--){
        echo "<tr>";
        for($k=1;$k<=9-$i;$k++){
            echo "<td>";
            echo "&nbsp;";
            echo "</td>";
        };
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i."*".$j."=".$i*$j;
            echo "</td>";
        };
        echo "</tr>";
    }
    echo "</table>";

    echo "<table width='800' align='center' border='1'>";
    echo "<caption><h2>...第四种乘法表...</h2></caption>";
    for($i=1;$i<10;$i++){
        echo "<tr>";
        for($k=1;$k<=9-$i;$k++){
            echo "<td>";
            echo "&nbsp;";
            echo "</td>";
        };
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i."*".$j."=".$i*$j;
            echo "</td>";
        };
        echo "</tr>";
    }
    echo "</table>";
?>