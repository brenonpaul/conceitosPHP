<?php 

define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'test'
], true);

//com o "true" eu posso chamar a constante BANCO_DE_DADOS com letras maiusculas e minusculas, porém por convencao não se usa letras minusculas em constantes

print_r(BANCO_DE_DADOS);

?>