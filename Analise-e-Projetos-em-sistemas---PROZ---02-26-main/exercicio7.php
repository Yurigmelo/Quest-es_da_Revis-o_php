<?php

// Exercício 7 - Lendo parâmetros de URL
// URL de exemplo: http://localhost/produto.php?id=15&categoria=eletronicos
// $_GET guarda os dados enviados pela URL em formato de array associativo.

$idProduto = $_GET['id'] ?? 0;
$categoriaProduto = $_GET['categoria'] ?? "sem categoria";

echo "Produto " . $idProduto . " da categoria " . $categoriaProduto;
?>
