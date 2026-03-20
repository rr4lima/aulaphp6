<?php
class contaBancaria
{
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        echo 'Saldo atual: ' . $this->saldo . '$RS';
        echo 'Você depositou: ' . $valor . ' $RS';
        return $this->saldo + $valor;
    }

    function sacar($valor)
    {
        if ($valor < $this->saldo) {
            echo 'Saldo atual: ' . $this->saldo . '$RS';
            echo 'Você sacou: ' . $valor . ' $RS';
            return $this->saldo - $valor;
        } else {

            echo 'Saque inválido, saldo insuficiente.';
        
        }
    }

}

?>