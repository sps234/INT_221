<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1> show profile </h1>
    <p> User Id : {{ $userId }} </p>
    <img src="{{ asset() }}" alt="Profile Image" width="150" height="150">
    <p>
        <a href="{{ route('profile') }}"> Back to Profile </a>
    </p>
</body>

</html>
