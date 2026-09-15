<?php

$resultado = "";

if (isset($_POST['nome']) && isset($_POST['ano_nascimento'])) {

    $nome = $_POST['nome'];
    $ano_nascimento = $_POST['ano_nascimento'];

    $data_nascimento = new DateTime($ano_nascimento . "-01-01");
    $hoje = new DateTime();

    $idade = $hoje->diff($data_nascimento)->y;

    if ($idade >= 18) {
        $resultado = "<p class='permitido'>✅ $nome, Acesso permitido!<br>Idade: $idade anos.</p>";
    } else {
        $resultado = "<p class='negado'>🚫 $nome, Acesso negado!<br>Idade: $idade anos.</p>";
    }

    // Atualiza a página depois de 3 segundos
    header("Refresh: 3");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verificador de Maioridade</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

    body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: url("ivyloveskitkat_pindown.io_1789480506 (1).gif");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
}

        .container {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .titulo {
            text-align: center;
            margin-bottom: 10px;
            color: #ef488b;
            font-size: 28px;
        }

        .subtitulo {
            text-align: center;
            color: #e8a8d4;
            margin-bottom: 30px;
            font-size: 14px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #f68cd6;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #f937c2;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #ef488b;;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #e546b3;
            transform: translateY(-2px);
        }

        .resultado {
            margin-top: 25px;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            background: #f5f3ff;
            color: #333;
        }

        .permitido {
            background: #e8f8ee;
            color: #218838;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .negado {
            background: #ffe8ed;
            color: #d6335c;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1 class="titulo">Verificador de Maioridade</h1>

        <p class="subtitulo">
            Descubra se você possui acesso permitido.
        </p>

        <!-- Formulário -->
        <form method="post" action="">

            <!-- Campo nome -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

            <!-- Campo ano de nascimento -->
            <label for="ano_nascimento">Ano de Nascimento:</label>
            <input type="number" id="ano_nascimento" name="ano_nascimento"
                   placeholder="Ex: 2005" required>

            <!-- Botão -->
            <button type="submit">Calcular Idade</button>

        </form>

        <!-- Resultado -->
        <?php
        echo $resultado;
        ?>

    </div>

</body>

</html>
