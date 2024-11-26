<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action = "/insert" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table>
            <tr>
                <td>Name</td>
                <td><input type = 'text' name = 'student_name' /></td>
            </tr>
            <tr>
                <td>Reg No</td>
                <td>
                    <input type="text" name="reg_no">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="">
                    <input type = 'submit' name = 'add student' />
                </td>
            </tr>
        </table>
    </form>

</body>

</html>
