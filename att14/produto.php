<?php

class Produto
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }


    public function exibir()
    {
        if ($this->preco >= 0) {
            echo "Produto: ", $this->nome, " - R$" . $this->preco;
        } else {
            echo "Preço inválido";
            exit;
        }
    }

}

?>