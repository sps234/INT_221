<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ url()->current() }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="name" placeholder="Name">
        <button type="submit"> Submit </button>
    </form>
</body>

</html>
