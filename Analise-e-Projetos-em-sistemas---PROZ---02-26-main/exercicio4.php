<?php

// Exercício 4 - switch

$numeroDoDia = 5;

echo "Número informado: " . $numeroDoDia . "<br>";

switch ($numeroDoDia) {
    case 1:
        echo "Segunda-feira: Frango grelhado";
        break;
    case 2:
        echo "Terça-feira: Fricasse";
        break;
    case 3:
        echo "Quarta-feira: Feijoada";
        break;
    case 4:
        echo "Quinta-feira: Carne de panela";
        break;
    case 5:
        echo "Sexta-feira: Strogonoff";
        break;
    case 6:
    case 7:
        echo "Restaurante fechado";
        break;
    default:
        echo "Número inválido";
        break;
}

echo "<br><br>";
echo "Se o break for removido, o programa continua lendo os próximos casos. " .
    "Por isso, ele pode mostrar mais de uma mensagem mesmo sem o usuário pedir isso.";
?>
