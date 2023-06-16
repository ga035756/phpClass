<?php
require('db.php');
$uid = $_REQUEST['uid'];
// $sql = "insert into UserInfo (uid) values ('$uid')";
$sql= "select * from userinfo where uid = '$uid'";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()){
    echo "{$row['uid']}";
}
// echo "<pre>";
// var_dump($result);
// echo "</pre>"
    //form 輸入uid 查詢 姓名住址電話=>不同label ,同時顯示查詢結果
    ?>