<html>
<head>
    <title>Users Grouped by Role</title>
</head>
<body>
    <h2> Users Grouped by Role </h2>

    <div>
        <h3>Admins</h3>
        @foreach ($admins as $admin)
            <span>{{ $admin->Name }}</span>
            <span>{{ $admin->Email }}</span><br>
        @endforeach
    </div>

    <div>
        <h3>Editors</h3>
        @foreach ($editors as $editor)
            <span>{{ $editor->Name }}</span>
            <span>{{ $editor->Email }}</span><br>
        @endforeach
    </div>

    <div>
        <h3>Viewers</h3>
        @foreach ($viewers as $viewer)
            <span>{{ $viewer->Name }}</span>
            <span>{{ $viewer->Email }}</span><br>
        @endforeach
    </div>

</body>
</html>
