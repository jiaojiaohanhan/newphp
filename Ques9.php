<?php
//for($i=1;$i<10;$i++){
//    for($j=1;$j<=$i;$j++){
//        if($j==9){
//            break;
//        }else{
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp;";
//        }
//    }
//    echo "<br/>";
//}

for($i=1;$i<10;$i++){
    for($j=1;$j<=$i;$j++){
        if($j==9){
            continue;
        }else{
            echo $i."*".$j."=".$i*$j;
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}

//for($i=1;$i<10;$i++){
//    for($j=1;$j<=$i;$j++){
//        if($j==3){
//            break;
//        }else{
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp;";
//        }
//    }
//    echo "<br/>";
//}

for($i=1;$i<10;$i++){
    for($j=1;$j<=$i;$j++){
        if($j>=3){
            continue;
        }else{
            echo $i."*".$j."=".$i*$j;
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}

//for($i=1;$i<10;$i++){
//    for($j=1;$j<=$i;$j++){
//        if($i==4){
//            break 2;
//        }else if($j==3){
//            break;
//        }else{
//            echo $i."*".$j."=".$i*$j;
//            echo "&nbsp;";
//        }
//    }
//    echo "<br/>";
//}

for($i=1;$i<10;$i++){
    for($j=1;$j<=$i;$j++){
        if($i>=4){
            continue;
        }else if($j>=3){
            continue;
        }else{
            echo $i."*".$j."=".$i*$j;
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
?>