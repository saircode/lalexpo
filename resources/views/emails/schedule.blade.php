<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>Nuevo mensaje desde lalexpo!</h1>
    <ul>
        <li>Asunto: {{$data['subject']}}</li>
        <li>Nombre: {{$data['name']}}</li>
        <li>Correo: {{$data['email']}}</li>
        <li>Celular: {{$data['cellphone']}}</li>
        <li>Pais: {{$data['country']}}</li>
        <li>Mensaje: {{$data['message']}}</li>
    </ul>
</body>
</html>