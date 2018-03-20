<a href="liuyan2.php">添加文章</a>
<?php
    include "liuyan1.php";
    $sql = "select * from blog order by bid desc";
    $query = mysqli_query($link,$sql);
//    mysqli_fetch_array();
//    $arr = array(1,2,3,4,5);
//    foreach($arr as $v){
    while($result = mysqli_fetch_array($query)){
?>
        <h3><?php echo $result['title'];?></h3>
        <ul>
            <li><?php echo $result['time'];?></li>
        </ul>
        <p><?php echo $result['content'];?></p>
<?php
    }
?>