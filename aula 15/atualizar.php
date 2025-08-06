<?php
require 'conexao.php';
$id = 1;
$novoPreco = 17.99;
$sql = "UPDATE livros SET preco = :preco WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':preco', $novoPreco);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "Produto atualizado com sucesso!";
} else {
echo "Erro ao atualizar produto.";
}
?>