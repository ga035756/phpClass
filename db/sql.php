<?php
require('db.php');

$sql = 'select * from UserInfo';
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
    echo "{$row['uid']},{$row['cname']}<br>";
}

//form 輸入uid 查詢 姓名住址電話=>不同label ,同時顯示查詢結果
?>