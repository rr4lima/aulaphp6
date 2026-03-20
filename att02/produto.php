<?php

class produto {
    public $nome;
    public $preco;

    public function exibir ($nome, $preco){
        echo "Produto: ". $nome." - R$". $preco."";
    }
}



?>
