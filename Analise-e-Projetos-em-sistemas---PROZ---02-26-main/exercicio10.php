<?php

// Exercício 10 - Login com sessão, cookie e classe
// Neste exemplo, a classe foi criada no mesmo arquivo para manter a organização simples
// e evitar arquivos extras, seguindo a ideia de um arquivo por exercício.

class Usuario {
    public $nomeUsuario;
    public $logado;

    public function __construct($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
        $this->logado = false;
    }

    public function autenticar() {
        $this->logado = true;
    }
}

session_start();

$usuario = new Usuario("aluno@faculdade");
$usuario->autenticar();

$_SESSION['usuario'] = $usuario->nomeUsuario;
$_SESSION['logado'] = $usuario->logado;
setcookie('ultimo_acesso', date('d/m/Y H:i:s'), time() + 3600);

echo "Usuário autenticado: " . $_SESSION['usuario'] . "<br>";
echo "Status: " . ($_SESSION['logado'] ? "true" : "false") . "<br>";
echo "Último acesso: " . $_COOKIE['ultimo_acesso'] . "<br>";

echo "<br>";
echo "A sessão guarda os dados do usuário enquanto ele navega no sistema. O cookie guarda uma informação no navegador, como a data do último acesso.";
?>
