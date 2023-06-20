<?php session_start(); ?>
<?php 
if (isset($_COOKIE['token'])) {
    header("location:".$_COOKIE['welcome']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loginCheck.php" method="post">
        <label for="uid">帳號 : </label>
        <input type="text" name="uid" id="uid"><br><br>
        <label for="pwd">密碼 : </label>
        <input type="text" name="pwd" id="pwd"><br><br>
        <input type="submit" value="登入">
        
    </form>
</body>
</html>