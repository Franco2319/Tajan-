<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Tajana</title>
</head>
<body>
    <p>Recibiste un mensaje de: </p>
    <p><strong>Nombre: </strong> {{ $msg['Nombre'] }} </p>
    <p><strong>Mail: </strong> {{ $msg['email'] }} </p>
    <br>
    <p><strong>Mensaje: </strong> {{ $msg['Mensaje'] }} </p>
    
    
</body>
</html>