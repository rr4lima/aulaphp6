<?php

class Carrinho
{
    private $produtos = [];

    public function adicionar($produto)
    {
        $this->produtos[] = $produto;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }
        return $total;

    }

     public function listar(){
            return $this->produtos;
        }

}


?>