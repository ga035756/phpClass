<?php session_start(); ?>
<?php
require_once('DB.php');
require_once('User.php');
$token = $_COOKIE['token'];
// $user = new User($token);
// $user->redirect();
User::logout($token);

?>