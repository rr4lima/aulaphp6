<?php
class carro
{
    public $marca;
    public $velocidade;

    public function acelerar($marca, $velocidade)
    {
        $velocidadeMais = $velocidade + 10;
        echo "A marca é: " . $marca . "A velocidade é de: " . $velocidadeMais . "";

    }

}
?>