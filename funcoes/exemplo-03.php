<?php

function ola($texto = "mundo", $periodo = "bom dia"){

	return "Olá $texto! $periodo!<br>";
}

echo ola("", "bom dia");
echo ola("Brenon", " ola mundo");
echo ola("rafael", "boa tarde");
echo ola("", "boa noite");

?>