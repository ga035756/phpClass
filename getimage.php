<?php
require('./db/db.php');
$uid = $_REQUEST['uid'];
$sql = "select image from userInfo where uid=?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $uid);
$stmt->execute();
$result = $stmt->get_result();
// var_dump($result);
// $result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    $image = $row['image'];
}
if($image ==null){
    $image = file_get_contents('https://pic.616pic.com/ys_bnew_img/00/06/27/TWk2P5YJ5k.jpg');
}

header('content-type:image/jpeg');
echo $image




?>