<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem</title>
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Raleway:wght@100&display=swap');
        body {
            background-image: linear-gradient(to right, rgb(72, 61, 139), rgb(0, 0, 0));
        }
        h1 {
            font-family: 'Raleway', sans-serif;
            color: white;
        }
        table,td,th {
            font-family: 'Raleway', sans-serif;
            color: white;
            border: 1px solid white;
            padding: 20px;
            border-collapse: collapse;
        }
        button {
            background-color: transparent;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
            border-color: white;
            color: white;
            font-size: 15px;
            height: 40px;
            width: 100px;
        }
        th~button{
            border-color: transparent;
        }
        </style>
    </head>
    <body>
        <center>
            <h1>Listagem de usuários</h1>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>*</th>
                        <th>*</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pessoas as $p)
                    <tr>
                        <td>{{$p->nome}}</td>
                        <td>{{$p->idade}}</td>
                        <td><a href="/editar/{{$p->id}}"><button>Editar</button></a></td>
                        <td><a href="/excluir/{{$p->id}}"><button>Excluir</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <a href="/"><button>Voltar</button></a>
        </center>
    </body>
</html>