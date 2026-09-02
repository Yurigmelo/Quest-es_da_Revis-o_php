<?php

// Exercício 2 - Contagem com for

$multiplos = [];
$quantidade = 0;

for ($numero = 3; $numero <= 30; $numero += 3) {
    $multiplos[] = $numero;
    $quantidade++;
}

echo "Múltiplos de 3 entre 3 e 30: " . implode(" ", $multiplos) . "<br>";
echo "Quantidade total: " . $quantidade;
?>
