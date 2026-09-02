<?php

// Exercício 8 - Criando uma classe simples

class Veiculo {
    private $quilometragem;

    public function __construct() {
        $this->quilometragem = 0;
    }

    public function rodar($quilometros) {
        $this->quilometragem += $quilometros;
    }

    public function exibirQuilometragem() {
        return "Quilometragem atual: " . $this->quilometragem . " km";
    }
}

$meuVeiculo = new Veiculo();
$meuVeiculo->rodar(30);
$meuVeiculo->rodar(45);

echo $meuVeiculo->exibirQuilometragem();
?>
