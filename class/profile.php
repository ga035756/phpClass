<?php session_start(); ?>
<?php
require('DB.php');
$newpwd='';
$cname='';
$token='';
if (isset($_POST['newpwd']) && isset($_POST['cname'])) {
    $newpwd = $_POST['newpwd'];
    $cname = $_POST['cname'];
}

if($newpwd !== "" && $cname !== ""){
    $token = $_COOKIE['token'];
    $src = $_FILES['file']['tmp_name'];
    $content = file_get_contents($src);
    $sql = "update userInfo set cname= ?,pwd= ?,image= ? where token = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssbs',$cname,$pwd,$content,$token);
    $stmt->send_long_data(2,$content);
    $stmt->execute();

    unlink($src);
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
    <h1>修改資訊 :</h1>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <label for="cname">姓名 : </label>
        <input type="text" name="cname" id="cname"><br><br>
        <label for="pwd">密碼 : </label>
        <input type="text" name="newpwd" id="newpwd"><br><br>
        <label for="headPhoto">大頭照 : </label>
        <input type="file" name="file" id="headPhoto"><br><br>
        <input type="submit" value="送出" id="submit">
        <!-- <input type="file" name="file"><br><br> -->
    </form>
    <script>
        submit.onclick = function() {
            if( !cname.value && !pwd.value) {
                alert("請完整輸入欲修改的資訊!");
            }
        }
    </script>
</body>
</html>