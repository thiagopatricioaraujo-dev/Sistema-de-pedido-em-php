<?php
class Pedido
{
    private int $numeroPedido;
    private Cliente $cliente;
    private array $itens = [];

    public function __construct(int $numeroPedido, Cliente $cliente) {
        $this->numeroPedido = $numeroPedido;
        $this->cliente = $cliente;
    }

    public function adicionarItem(ItemPedido $item): void {
        $this->itens[] = $item;
    }

    public function exibirPedido(): void {
        echo "Pedido Nº: " . $this->numeroPedido . "\n";
        echo "Cliente: " . $this->cliente->getNome() . "\n";
        echo "Itens:\n";

        foreach ($this->itens as $item) {
            echo "- " . $item->getProduto()->getNome() .
                 " | Quantidade: " . $item->getQuantidade() . "\n";
        }
    }
}
?>
