<?php
class aluno
{
    private $nome;
    private $nota;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getnota()
    {
        return $this->nota;

    }

    public function setnota($nota)
    {
        $this->nota = $nota;

    }



    public function verificar ($nota, $nome) {
        if ($nota >= 7 ) {
            echo "O aluno " . $nome . "e stá aprovado!";
        } else {
            echo "O aluno ". $nome . " está reprovado!";
        }

    }
}

?>