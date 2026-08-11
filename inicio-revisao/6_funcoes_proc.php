<?php

// função simples
function somar(int $a, int $b): int {
    return $a + $b;
}

// exibir resultado
echo somar (4, 8);
echo "<br>";

// funcao sem retorno
function saudacao($nome = "aluno") {
    echo "olá, $nome! seja bem-vindo ao PHP.
    <br>";
}

//exibir resultado
saudacao();
saudacao("Mari lindinha ");

// Outro procedimento
function mostrarLinha() {
    echo "------------------------------<br>";
}

mostrarLinha();
?>