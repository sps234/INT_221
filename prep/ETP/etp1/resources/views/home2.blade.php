<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h3> {{ URL::current() }}</h3>
    {{-- <h3> {{ url()->current() }}</h3> --}}
    <h3> {{ url()->full() }}</h3>
    {{-- <h3> {{ URL::full() }}</h3> --}}
    <h3> {{ URL::previous() }} </h3>
    {{-- <h3> {{ url()->previous() }} </h3> --}}

    <a href="{{ URL::to('about') }}"> About </a>
    <a href="{{ URL::to('home') }}"> Home </a>

    <p> <a href="{{ URL::to('about', ['ss']) }}"> About ss </a></p>
</div>
