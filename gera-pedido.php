<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail());
$gerarPedidoHandler->attach(new \Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
