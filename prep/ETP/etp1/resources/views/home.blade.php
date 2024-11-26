<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    @include('common.header')


    <!-- Localization -->

    <div>
        <h3> Choose your language </h3>
        <a href="/setLang/en"> English </a>
        <a href="/setLang/hi"> Hindi </a>
    </div>
    <h1> {{ __('home.heading1') }} <span> {{ __('home.name1', ['name' => 'sam']) }}</span> </h1>


    {{-- @include('common.inner', ['page' => 'this is the home page']) --}}
    @includeIf('common.inner', ['page' => 'this is the home page'])

    <a href = "/about/sam"> about </a>
    <a href="{{ URL::to('home-2') }}"> Home-2 </a>


</div>
