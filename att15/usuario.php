<?php

class Usuario {
    public $email;
    public $senha;

    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

   public function login($email, $senha) {
        if ($this->email === $email && $this->senha === $senha) {
            return "Login realizado com sucesso!";
        } else {
            return "Email ou senha inválidos.";
        }
    }
}



?>