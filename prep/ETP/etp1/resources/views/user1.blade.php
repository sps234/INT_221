<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1> user1 </h1>
    <p> {{ $name ?? 'User1' }} </p> <!-- using blade template engine -->
    <p> <?php echo $name ?? 'User1'; ?> </p> <!-- using php -->
    <br>
    @foreach ($users as $user)
        <p> {{ $user }} </p>
    @endforeach

</div>
