<?php
    $info=array(
        'user'=>array(
            array(1,"li",17,"man"),
            array(2,"wang",18,"woman"),
            array(3,"liu",19,"man")
        ),
        'score'=>array(
            array(1,100,98,80,85),
            array(2,99,96,91,86),
            array(3,96,95,100,88)
        ),
        'connect'=>array(
            array(1,110,"aa@qq.com"),
            array(2,120,"bb@qq.com"),
            array(3,119,"cc@qq.com")
        )
    );
    foreach($info as $value){
        echo "<table width='800' align='center' border='1'>";
        foreach($value as $value2){
            echo "<tr>";
            foreach($value2 as $value3){
                echo "<td>";
                echo $value3;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br/>";
    }
?>