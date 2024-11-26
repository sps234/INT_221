<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h2> User Form 1 </h2>
    {{-- <p> {{ print_r($errors) }} </p> --}}

    <form action="/addUser3" method="post">
        {{-- <form action="/addUser1" method="get"> --}}
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                class="{{ $errors->first('name') ? 'input-error' : '' }}">
            <span> @error('name')
                    {{ $message }}
                @enderror </span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Email" name="email">
            <span> @error('email')
                    {{ $message }}
                @enderror </span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="City" name="city">
            <span> @error('city')
                    {{ $message }}
                @enderror </span>
        </div>
        <div class="input-wrapper">
            <button> Add New User </button>
        </div>
    </form>
</div>


<style>
    input {
        border: 1px solid #ccc;
        height: 30px;
        width: 200px;
        border-radius: 2px;
    }

    .input-wrapper {
        margin: 10px;
    }

    .input-error {
        border: 1px solid red;
        color: red;
    }
</style>
