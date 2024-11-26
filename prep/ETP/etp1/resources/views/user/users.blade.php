<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p> {{ print_r($users) }}</p>
    @foreach ($users as $user)
        <p> {{ $user->name }} <a href="{{ url('edit-user', $user->id) }}">Edit</a> <a
                href="{{ url('delete-user', $user->name) }}">Delete</a> </p>
    @endforeach

</body>

</html>
