<?php

$a = 10;

function trocaValor(&$a){

	$a +=50;
	return $a;

}
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

//o que acontece na funcao, fica na funcao


?>