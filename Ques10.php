<?php
    for($i=0;$i<=4;$i++){
        for($k=0;$k<4-$i;$k++){
            echo "&nbsp;";
        }
        for($j=0;$j<=$i;$j++){
            echo "*&nbsp;";
        }
        echo "<br/>";
    }
    for($i=0;$i<=4;$i++){
        for($k=0;$k<4-$i;$k++){
            echo "&nbsp;";
        }
        if($i!=4) {
            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0) {
                    echo "*&nbsp;";
                } else if ($j == $i) {
                    echo "&nbsp;*";
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
        }else{
            for($j=0;$j<=$i;$j++){
                    echo "*&nbsp;";
            }
        }
        echo "<br/>";
    }
?>