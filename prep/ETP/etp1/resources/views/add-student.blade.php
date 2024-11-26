<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1> Add New Student </h1>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <br><br>
        <input type="email" name="email" placeholder="Email">
        <br><br>
        <button> Submit </button>
    </form>
</div>
