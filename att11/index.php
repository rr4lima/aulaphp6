<?php 
 include_once "produto.php";

$produto = new Produto("Camiseta", 153);

$produto->desconto(154); 

echo "Produto: " . $produto->nome . "<br>";
echo "Preço com desconto: R$ " . $produto->preco;

?>