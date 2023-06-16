<?php
require('db.php');
$uid = $_REQUEST['uid_input'];
$defaultNull = 'nonenondsfsdfe';
$sql = "call userinfoQuery(?,?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss', $uid,$defaultNull);
$stmt->execute();
$result = $stmt->get_result();

// $result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "{$row['cname']},{$row['address']},{$row['tel']}\n";
}

//form 輸入uid 查詢 姓名住址電話=>不同label ,同時顯示查詢結果

// $sql = "select * from UserInfo where uid = '{$uid}'";
// $sql="
// select UserInfo.uid, ifnull(cname, '無') as cname, ifnull(address, '無') as address, ifnull(tel, '無') as tel
// from UserInfo left join Live
//    on UserInfo.uid  = Live.uid
//    left join House
//    on live.hid = House.hid
//    left join phone
//    on Phone.hid = House.hid
// where UserInfo.uid = '{$uid}'
// ";
?>