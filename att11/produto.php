<?php

class Produto
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;    
        $this->preco = $preco;
    }


    public function desconto ($percentual){
        $desconto = $this->preco * ($percentual / 100);
        $this ->preco -= $desconto;

        if ($desconto >100 || $desconto < 0) {
            echo "Desconto inválido";
            exit;
        }

    }


}



?>