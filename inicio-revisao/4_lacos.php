<?php

// Laço FOR - Exemplo aplicado em Tabuada
for ($i = 1; $i <=10; $i++) {
    echo "8 x $i - " . (8 * $i) . "\n";
} 

// WHILE - (Enquanto) Contagem regressiva
echo "<br>";
$n = 8;
while ($n >= 0) {
    echo $n . "<br>";
    $n--;
}

// DO  WHILE - ( Faça enquanto) Executa ao menos uma vez

echo "<br>";
$j = 0;
do {
    echo "j vale: $j <br>";
    $j++;
} while ($j <= 10);
?>