<?php
require_once "produto.php";
require_once "cliente.php";
require_once "pedido.php";

$cliente = new Cliente('Carlos');
$p1 = new produto('Tênis', 300);
$p2 = new produto ('Água', 2.50);
$p3 = new produto('Fone de ouvido', 60);

$pedido = new pedido($cliente);

$pedido->addProduto($p1);
$pedido->addProduto($p2);
$pedido->addProduto($p3);
$pedido->exibir();

?>