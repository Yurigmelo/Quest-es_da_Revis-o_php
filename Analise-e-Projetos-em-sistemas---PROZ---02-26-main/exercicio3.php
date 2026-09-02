<?php

// Exercício 3 - Função com retorno

function areaRetangulo($base, $altura) {
    if ($base < 0 || $altura < 0) {
        return "Valores inválidos";
    }

    return $base * $altura;
}

$areaUm = areaRetangulo(4, 5);
$areaDois = areaRetangulo(7, 3);
$areaTres = areaRetangulo(10, 2);

echo "Área 1: " . $areaUm . "<br>";
echo "Área 2: " . $areaDois . "<br>";
echo "Área 3: " . $areaTres . "<br>";
echo "Área com número negativo: " . areaRetangulo(-2, 4) . "<br>";
?>
