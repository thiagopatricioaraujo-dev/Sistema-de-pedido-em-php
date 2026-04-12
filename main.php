<?php
require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

$cliente = new Cliente("Matheus", "Matheus12375@gmail.com");

$produto1 = new Produto("Notebook", 3500);
$produto2 = new Produto("Mouse", 100);

$pedido = new Pedido(1, $cliente);

$item1 = new ItemPedido($produto1, 1);
$item2 = new ItemPedido($produto2, 2);

$pedido->adicionarItem($item1);
$pedido->adicionarItem($item2);

$pedido->exibirPedido();
?>
