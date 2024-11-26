<html>

<head>
    <title>Student Managment</title>
</head>

<body>

    <form action = "/insert" method="post">
        <input type ="hidden" name = "_token" value ="<?php echo CSRF_token(); ?>">
        <table>
            <tr>
                <td>Name</td>
                <td><input type = 'text' name = 'student_name' /></td>
            </tr>
            {{-- <td colspan ='2'> --}}
            <td colspan="2"><input type = 'submit' name = 'add student' /></td>
            {{-- </td> --}}
            </tr>
        </table>
    </form>
</body>

</html>
