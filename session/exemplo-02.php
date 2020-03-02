<?php

require_once("config.php");

session_unset($_SESSION[]);

echo $_SESSION['nome'];

session_destroy();

//session_unset limpa os dados de sessão, mas vc continua sendo a mesma pessoa. já o destroy "esplode" vc do site, limpando a variavel e removendo vc



?>