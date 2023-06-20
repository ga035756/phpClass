<?php session_start(); ?>
<?php
// require_once('DB.php');
// require_once('User.php');
// if (!$_COOKIE['token']) {
//     header('location: login.php');
//     die();
// }
// $user = unserialize($_SESSION['user']);
require_once('DB.php');
require_once('User.php');


if (! $_COOKIE['token']) {
   header('location: login.php');
   die();
}


$user = unserialize($_SESSION['user']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
   <h1><?= $user->cname ?> 登入成功</h1>
   <img src="<?= $user->src ?>" width="200">
   <div>
   <button onclick="location.href='logout.php'">登出</button>
   <button onclick="location.href='profile.php'">修改帳戶資訊</button>
   </div>
</body>
</html>









<!-- // $token = $_COOKIE['token'];
// $cname = null;
// $image = null;
// $scr = null;
// DB::select('select * from userinfo where token = ?' . function ($rows) {
//     global $cname, $image, $src;
//     $cname = $rows[0]['cname'];
//     $image = $rows[0]['image'];
//     if ($image == null) {
//         $image = file_get_contents('https://www.searchlightinc.org.au/wp-content/uploads/2015/07/Headshot.jpg');
//     }
//     $mime_type = (new finfo(FILEINFO_MIME_TYPE))->buffer($image);
//     $image_base64 = base64_encode($image);
//     $src = "data:{$mime_type};base64,{$image_base64}";
// }, [$token]);
// ?> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?= $cname ?> 登入成功!
    </h1><br>
    <img src="<?= $src ?>" width="200"><br>
    <button onclick="location.href='logout.php'">登出</button>
    <button onclick="location.href='profile.php'">修改帳戶資訊</button>
</body>

</html> -->