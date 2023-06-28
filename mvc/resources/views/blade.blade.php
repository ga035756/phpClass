<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello,
    @if ($value >= 0)
    <h1>{{$value*2}}</h1>
    @else
    {{$value * -1}}
    @endif

</body>

</html>