<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Hellow Laravel</h1>
    <form action="/hellow" method="POST">
        @csrf
        Your name:
        <input type="text" name="userName">
        <input type="submit" value="OK">
    </form>
</body>

</html>