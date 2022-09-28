<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Pessoa</title>
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Raleway:wght@100&display=swap');
        body {
            background-image: linear-gradient(to right, rgb(72, 61, 139), rgb(0, 0, 0));
        }
        h1 {
            font-family: 'Raleway', sans-serif;
            color: white;
        }
        p{
            font-family: 'Raleway', sans-serif;
            color: white;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        label{
            font-family: 'Raleway', sans-serif;
            font-size: 19px;
            color: white;
        }
        input{
            border-radius: 5px;
            color: black;
            font-family: 'Abyssinica SIL', serif;
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
        </style>
    </head>
    <body>
        <center>
            <h1>Cadastro de Usuários</h1>
            <form action="/inserir-pessoas" method="post">
                @csrf
                <p>{{ session() -> get('xyz')}}</p>
                <label for="txtNome">Nome:</label>
                <input type="text" name="nome" id="txtnome">
                <br><br>
                <label for="txtidade">Idade:</label>
                <input type="text" name="idade" id="txtIdade">
                <br><br><br>
                <button type="submit">Confirmar</button> &nbsp;
                <a href="/"><button type="button">Voltar</button></a>
            </form>
            <br>
        </center>
    </body>
</html>