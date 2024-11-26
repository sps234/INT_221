@extends('layout.includes.centered_hero')
@section('title', 'This is MVC Page')

@for ($i = 0; $i <= 0; $i++)
    {
    <p> The number is <b> {{ $i }} </b> </p>
    }
@endfor

<h1> <i> {{ $heading }} </i> </h1>

<p> <?php echo $heading; ?> </p>
<p> <?= htmlentities($heading) ?> </p>
<p> {!! $heading !!}</p>
