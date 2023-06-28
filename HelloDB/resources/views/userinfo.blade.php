<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>uid</th>
            <th>name</th>
            <th>address</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->uid}}</td>
            <td>{{$user->cname}}</td>
            <td>{{$user->address}}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>