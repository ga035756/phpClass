<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        @csrf
        Number A: <input name="a" type="text">
        Number B: <input name="b" type="text">
        opration <input name="o" type="text">
        <input type="submit" value="執行">
    </form>
</body>
</html>