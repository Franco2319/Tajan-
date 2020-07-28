<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align:center;margin-top:50px;">
        You must enter the password to view this content.
        <form method="POST" action="/formact2">
        {{-- {{csrf_field()}} --}}
    @csrf
            <input type="text" name="name">
            <BR>
            <input type="password" name="pass">
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>