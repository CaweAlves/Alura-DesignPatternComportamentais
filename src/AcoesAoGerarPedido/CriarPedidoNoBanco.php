<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Cria pedido no banco de dados" . PHP_EOL;
    }
}
