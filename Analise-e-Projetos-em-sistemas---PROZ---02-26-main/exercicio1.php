<?php

// Exercício 1 - Comparando valores

$valorA = "10";
$valorB = 10;
$valorC = 10;

echo "1) valorA == valorB: " . (($valorA == $valorB) ? "true" : "false") . "<br>";
echo "2) valorA === valorB: " . (($valorA === $valorB) ? "true" : "false") . "<br>";
echo "3) valorB == valorC: " . (($valorB == $valorC) ? "true" : "false") . "<br>";
echo "4) valorB === valorC: " . (($valorB === $valorC) ? "true" : "false") . "<br>";

echo "<br>";
echo "Explicação: == compara só o valor. Já === compara o valor e o tipo da variável. " .
    "Por isso, '10' e 10 são iguais em ==, mas diferentes em === porque um é string e o outro é inteiro.";
?>
