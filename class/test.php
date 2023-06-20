<?php session_start(); ?>
<?php
require('User.php');

$user = unserialize($_SESSION['user']);
echo $user->getToken();