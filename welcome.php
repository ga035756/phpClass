<?php session_start(); ?>
<?php  
if ( !$_COOKIE['token'] ) {
    header('location: login.php');
    die();
}
require('db.php');
$token = $_COOKIE['token'];
$sql = 'select * from userInfo where token = ?';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s',$token);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$cname = $row['cname'];
$image = $row['image'];
if ( $image == null ) {
    $image = file_get_contents('https://www.searchlightinc.org.au/wp-content/uploads/2015/07/Headshot.jpg');
}
// data:image/jpeg;base64,ooxx
$mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($image);
$image_base64 = base64_encode($image);
$src = "data:{$mime_type};base64,{$image_base64}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $cname ?> 登入成功!</h1><br>
    <img src="<?= $src ?>" width="200"><br>
    <button onclick="location.href='logout.php'">登出</button>
    <button onclick="location.href='profile.php'">修改帳戶資訊</button>
</body>
</html>