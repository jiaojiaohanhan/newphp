<?php
    echo "...for循环的乘法表...";
    echo "<br/>";
    for($i=1;$i<10;$i++){
        for($j=1;$j<=$i;$j++){
            echo $i."*".$j."=".$i*$j;
            echo "&nbsp";
        }
        echo "<br/>";
    }
    echo "...while循环的乘法表...";
    echo "<br/>";
    $a=1;
    while($a<10){
        $b=1;
        while($b<=$a) {
            echo $a."*".$b."=".$a*$b;
            echo "&nbsp";
            $b++;
        }
        echo "<br/>";
        $a++;
    }
    echo "...do-while循环的乘法表...";
    echo "<br/>";
    $z=1;
    do{
        $x=1;
        do{
            echo $z."*".$x."=".$z*$x;
            echo "&nbsp";
            $x++;
        }while($x<=$z);
        echo "<br/>";
        $z++;
    }while($z<10);
?>