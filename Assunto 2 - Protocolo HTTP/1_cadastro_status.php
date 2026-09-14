<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de alunos (Com status Codes)</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required><br><br>

        <input type="submit" value="Enviar">

    </form>

<hr>
<?php
// $_SERVER["REQUEST_METHOD"] == "POST" verifica se o formulário foi enviado via POST
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    //tratamento de erro para idade
    if($nome == '' || $idade == '') {
        http_response_code(400); // Bad Request
        echo "Erro: Nome e idade são obrigatórios.";
    } elseif(!is_numeric($idade)) {
        http_response_code(422); // Unprocessable Entity
        echo "Erro: Idade deve ser um número.";
    } else {
        http_response_code(200); // OK
        echo "Cadastro realizado com sucesso! Nome: $nome, Idade: $idade";
    }
}
</body>
</html>