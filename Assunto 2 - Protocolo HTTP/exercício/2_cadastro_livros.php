<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>

    <form method="post" action="">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>

        <label for="ano">Ano:</label>
        <input type="text" name="ano" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST["titulo"];
    $ano = $_POST["ano"];

    echo "<h2>Livro cadastrado!</h2>";
    echo "Título: " . $titulo . "<br>";
    echo "Ano: " . $ano;
}

?>

</body>
</html>
