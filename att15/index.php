<?php 
include_once "usuario.php";

$usuario = new Usuario('rafaela123@gmail.com', '1234');
echo $usuario->login('rafaela123@gmail.com', '123');




?>