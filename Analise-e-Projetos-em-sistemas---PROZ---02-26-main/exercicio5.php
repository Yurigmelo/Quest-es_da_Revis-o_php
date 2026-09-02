<?php

// Exercício 5 - Ranking

$participantes = [
    ["nome" => "Ana", "pontos" => 850],
    ["nome" => "João", "pontos" => 920],
    ["nome" => "Maria", "pontos" => 780],
];

usort($participantes, function ($pessoa1, $pessoa2) {
    return $pessoa2["pontos"] <=> $pessoa1["pontos"];
});

echo "Ranking dos participantes:<br>";

foreach ($participantes as $posicao => $participante) {
    $numeroDaPosicao = $posicao + 1;
    echo $numeroDaPosicao . "º lugar: " . $participante["nome"] . " - " . $participante["pontos"] . " pontos<br>";
}
?>
