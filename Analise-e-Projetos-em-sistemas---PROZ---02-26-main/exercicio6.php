<?php

// Exercício 6 - Percorrendo e pulando itens

$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];

echo "Itens do estoque, exceto Cabo HDMI:<br>";

foreach ($itens as $item) {
    if ($item === "Cabo HDMI") {
        continue;
    }

    echo $item . "<br>";
}
?>
