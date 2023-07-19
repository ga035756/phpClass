<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        @method('post')
        <input type="text" name="text">
        <input type="submit" value="送出查詢">
    </form>
</body>

</html>