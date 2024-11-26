<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <x-message-banner message="success message" class="success" />
    <br><br>
    <x-message-banner message="error message" class="error" />
    <br><br>
    <x-message-banner message="warning message" class="warning" />
    <br><br>
    <h1> about </h1>
    @include('common.inner', ['page' => 'This is the about page'])
    <p> {{ $fname }} </p>
    <a href="/home-2"> Home-2</a>
    <a href="/home"> Home</a>

</div>


<style>
    .success {
        background: lightgreen;
        color: green;
        padding: 10px 15px 10px 15px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
    }

    .error {
        background: lightcoral;
        color: red;
        padding: 10px 15px 10px 15px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
    }

    .warning {
        background: #afaf68;
        color: yellow;
        padding: 10px 15px 10px 15px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
    }
</style>
