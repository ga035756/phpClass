<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file1">
        <p>
            <input type="file" name="file2">
        <p>
            <input type="submit">
</body>

</html>