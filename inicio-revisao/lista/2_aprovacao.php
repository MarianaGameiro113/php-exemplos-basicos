<?php

//Variaveis

$nota1 = 7.0;
$nota2 = 8.0;
$nota3 = 5.0;
$quantidade_de_faltas = 15;

//Calcula a média final
$media_final = ($nota1 + $nota2 + $nota3) / 3;

// O aluno foi aprovado?
if ($media_final >= 6.0 && $quantidade_de_faltas <= 15) {
    echo "O aluno foi aprovado.";
} else {
    echo "O aluno foi reprovado.";
}

// Exibe o resultado
echo "Média final do aluno: " . number_format($media_final, 1, ',', '.') . "<br>";
echo "Quantidade de faltas: " . $quantidade_de_faltas . "<br>";