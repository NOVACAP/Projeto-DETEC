<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Atividades</h1>
    <table>
        @foreach ($activities as $activity)
            <tr>
                <td><p> Atividade: {{ $activity ->  activityName }}</p></td>
                <td>  
                    <form action="/editar-atividade/{{$activity ->  id}}" mathod="GET ">
                        <button type="submit">Editar</button>
                    </form>
                </td>
                <td>  
                    <form action="/excluir-atividade/{{$activity ->  id}}" mathod="GET ">
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
</body>
</html>