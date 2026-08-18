<?php

//Variaveis

$preço = 200;
$quantidade = 10;
$desconto = 0.10;

//Calcula o valor total
$valorTotal = $preço * $quantidade;

// Tem direito ao desconto?
if ($valorTotal >= 200) {
    $desconto = $valorTotal * 0.10;
    $valorFinal = $valorTotal - $desconto;
} else {
    $valorFinal = $valorTotal;
}

// Exibe o resultado
echo "Valor total da compra: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";