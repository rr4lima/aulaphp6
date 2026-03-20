<?php

class produto
{
    public $nome;
    public $preco;

    public function mostrar($nome, $preco)
    {
        if ($preco >= 0) {
            echo "Produto: " . $nome . " Preço: " . $preco . "";

        } else {
            echo "Preço inválido";
        }

    }
}

?>