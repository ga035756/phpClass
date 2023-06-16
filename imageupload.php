<?php
require('./db/db.php');

$uid = $_REQUEST['uid'];
$src = $_FILES['file']['tmp_name'];
// $dst = './images/' . $_FILES['file']['name']; 
//相對路徑
// $dst = $_SERVER['DOCUMENT_ROOT'] . '/images/' . $_FILES['file']['name'];
//相對路徑
// die($dst);
$contents = file_get_contents(($src));

$sql = "update userInfo set image = ? where uid = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('bs', $contents, $uid);
$stmt->send_long_data(0,$contents );
$stmt->execute();


unlink($src);
// if (move_uploaded_file($src, $dst)) {
//     echo 'success';
// } else {
//     echo 'error:' . $_FILES['file']['error'];
// }
// if (move_uploaded_file($src, $dst)) {
//     echo 'success';
// } else {
//     echo 'error:' . $_FILES['file']['error'];
// }


// mac htdocs 資料夾下此指令 cmd line
// sudo chown daemon images


?>