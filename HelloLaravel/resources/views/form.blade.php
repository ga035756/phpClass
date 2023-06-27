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
        Number A : <input name="a">
        Number B : <input name="b">
        Operator: <input name="op">
        <input type="submit" value="送出查詢">
    </form>
</body>
</html>