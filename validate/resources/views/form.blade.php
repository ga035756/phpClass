<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="do">
        @csrf
        account: <input type="text" name="account">
        Password:<input type="password" name="password" value="{{old('a')}}">

        @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        Re-Type:<input type="password" name="password_confirmation">
        <p></p>
        <input type="submit" value="test">
    </form>

</body>

</html>