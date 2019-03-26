<?php

//include "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";


//a diferenca entre include e require é que o rqquire obriga que o arquivo exista e que esteja funcionando perfeitamente, senão ele para, já o include tenta funcionar mesmo se o arquivo estiver com um problema, além de ter mais recursos

$resultado = somar(10,25);

echo $resultado;

?>