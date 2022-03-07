<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar categoria</h1>
    <form action="/editar-atividade/{{$activity -> id}}" method= 'POST'>
        @csrf {{-- gera token de segurnaça a cada envio--}}
        <label>Area técnica:</label>
        <input type="text" name="activityName" value="{{$activity -> activityName}}" > 
        <br><br> 
        <button type="submit">Salvar</button>
    </form>
</body>
</html>