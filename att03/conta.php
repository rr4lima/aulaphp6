<?php

class conta
{
    private $saldo;

    public function verSaldo()
    {
        echo "Saldo: R$" . $this->getSaldo() . "";
    }

    public function getSaldo()
    {
        return $this->saldo;

    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

    }
}



?>