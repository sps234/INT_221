<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ session('message') ?? '' }}
    <form action="/flash-login" method="POST">
        @csrf
        <input type="text" name="user" placeholder="Name">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>

</html>
