<?php session_start(); ?>
<?php
require('db.php');

$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];

// $sql = "call login($uid,$pwd)";
// $sql = "call login(?,?)";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param('ss',$uid,$pwd);
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();
// $nextPage = $row['result'];

// $sql = "select * from userInfo where uid = '{$uid}' and pwd = '{$pwd}'";
// $result = $mysqli->query($sql);
// $row = $result->fetch_assoc();

// if ($row == null) {
//     header("location: error.html");
// }else {
//     header("location: welcome.html");
// }
// $nextPage = $row['result'];
// header("location:{$nextPage}");


$sql = "call login(?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ss',$uid,$pwd);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$nextPage = $row['result'];
$token = $row['token'];

if ($nextPage == "welcome.php") {
    // $_SESSION['uid'] = $uid;
    // $_SESSION['welcome'] = $nextPage;
    setcookie('token',$token,time() + 120);
    setcookie('welcome',$nextPage,time() + 120);
}

header("location:{$nextPage}");
?>