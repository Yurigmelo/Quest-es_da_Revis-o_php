<?php

// Exercício 9 - Herança e visibilidade

class Funcionario {
    public $nome;
    protected $salario;
    private $senhaAcesso;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function exibirResumo() {
        return "Nome: " . $this->nome . ", Salário: " . $this->salario;
    }
}

$gerente = new Gerente("Carlos", 5000);
echo $gerente->exibirResumo() . "<br>";

echo "<br>";
echo "1) Sim, o método funciona porque $nome é público e $salario é protegido. Como Gerente herda de Funcionario, ele consegue acessar os atributos herdados protegidos.<br>";
echo "2) Não. O atributo $senhaAcesso é private, então só a própria classe Funcionario consegue usá-lo.<br>";
echo "3) Não. Uma classe que não herda de Funcionario não consegue acessar $salario, porque ele é protected e só é visível para classes filhas.";
?>
