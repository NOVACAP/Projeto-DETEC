<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <form action="/atividades" method= 'POST'>
        @csrf {{-- gera token de segurnaça a cada envio--}}
        <label>Area técnica:</label>
        <input type="text" name="activityName" > 
        <br><br> 
        <button type="submit">Salvar Produto</button>
    </form>
    <br>
</body>
</html>