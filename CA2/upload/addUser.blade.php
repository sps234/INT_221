
<html >
<head>
    <title>Add User</title>
</head>
<body>
    <h2> Add User </h2>
    <form action="/add-user" method="POST">
        @csrf
        <label> Name </label> <br>
        <input name="name" type="text"><br><br>

        <label> Email </label> <br>
        <input name="email" type="email"><br><br>

        <label> Role </label><br><br>
        <select name="roles">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
            <option value="viewer">Viewer</option>
        </select><br><br>

        <button type="submit"> Add User </button>
    </form>
</body>
</html>
