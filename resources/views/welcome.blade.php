<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
</head>
<body>
    <form action="login" method="POST">
        @csrf
        <input type="text" name="usuario">
        <input type="text" name="clave">
        <input type="submit" value="manda">
    </form>
</body>
</html>