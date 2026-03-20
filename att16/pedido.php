<?php



class Pedido
{
    private $cliente;
    private $produtos = [];

    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }

    public function addProduto(produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;

    }

    public function exibir ( ) {
        echo "Resumo do pedido:\n";
        echo "Cliente: " . $this->cliente->getNome() . "\n\n";

        echo "Produtos:\n";
        foreach ($this->produtos as $produto) {
            echo "- " . $produto->getNome() . " -> R$ " . number_format($produto->getPreco(),2,".","") ."\n"; 
    }
     
    echo "\nTotal: R$ " . number_format($this->calcularTotal(),2,".",".");

    }
}
 ?>