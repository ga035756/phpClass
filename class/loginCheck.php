<?php session_start(); ?>
<?php
// require('User.php');

// $uid = $_REQUEST['uid'];
// $pwd = $_REQUEST['pwd'];

// // $user = new User();
// // $user->login($uid, $pwd, function ($result) {
// // });
// // if ($user->nextPage == "welcome.php") {
// //     setcookie('token', $user->getToken(), time() + 120);
// //     setcookie('welcome', $result, time() + 120);
// // }
// // $_SESSION['user'] = serialize($user);
// // header("location:{$user->nextPage}");


// $user=new User($uid,$pwd);
// $user->redirect();

require_once('User.php');


$uid = $_REQUEST['uid'];
$pwd = $_REQUEST['pwd'];


$user = new User($uid, $pwd);
$user->redirect();

?>