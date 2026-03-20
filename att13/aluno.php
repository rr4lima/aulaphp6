<?php
class aluno
{
    public $nome;
    public $nota1;
    public $nota2;

    public function __construct($nome, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function media (){
        return ($this->nota1 == $this->nota2) / 2;

    }

    public function situacao (){
        $media = $this->media();

        if ($media >= 7) {
            echo "Você foi aprovado! Sua nota é: " . $media;
        } else if ($media >= 5 ) {
            echo "Você ficou de recuperação. Sua nota é: ". $media; 
            } else {
                echo "Você foi reprovado! Sua nota é: " . $media; 
            exit; 
        } 
    }

}

?>