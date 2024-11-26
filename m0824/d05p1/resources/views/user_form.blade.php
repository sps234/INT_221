<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Post Data </title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    
<div class="container">
        <h1>  Form </h1>
        <form method="POST" action="<?=url('get-userdata3')?>"  >
            <!-- <?=session('message')?> <br>
            -->
            @csrf 
            <label > <b> Name : </b> <input type="text" name="name"></label> <br> <br>
            <label > <b> Age : </b> <input type="text" name="age"></label> <br> <br>
            <label> <b> Contact No: </b> <input type="text" name="contact"></label> <br> <br>
            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
            <input type="submit" value="Send">
        </form>

    </div>
    
</body>
</html>