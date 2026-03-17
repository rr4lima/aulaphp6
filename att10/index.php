<?php

require_once "config/config.php";
require_once "funcoes/saudacao.php";

include "includes/menu.php";

echo "<h1>$sistema</h1>";

mostrarSaudacao();

include "includes/rodape.php";

?>