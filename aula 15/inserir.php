<?php
require 'conexao.php';
$nome = "Sherlok Holmes: O Cão dos Baskerville";
$preco = 20.00;
$estoque = 10;
$sql = "INSERT INTO livros (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':estoque', $estoque);
if ($stmt->execute()) {
echo "Produto inserido com sucesso!";
} else {
echo "Erro ao inserir produto.";
}
?>