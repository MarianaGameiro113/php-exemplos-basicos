<?php

$notas = [8, 7, 9, 6, 10];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

foreach ($notas as $nota) {
    $soma = $soma + $nota;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . $media . "<br>";
echo "Maior nota: " . $maior . "<br>";
echo "Menor nota: " . $menor;

?>