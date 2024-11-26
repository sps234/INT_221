<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2> Profile Page </h2>
    @if (session('user'))
        <h3> Welcome {{ session('user') }} </h3>
    @else
        <h3> Welcome Guest </h3>
    @endif

    <h4> {{ session('allData')['pwd'] }}</h4>
    {{-- {{ session()->reflash() }} --}}
    {{ session()->keep(['message']) }}

    <h3> <a href="/logout-1"> Logout </a></h3>
</body>

</html>
