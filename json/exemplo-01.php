<?php

$pessoas = array();

//funcao de array para adicionar item no array depois que estiver criado, devemos colocar nela qual o array alvo e o outro array que informorá os dados
array_push($pessoas, array(
	'nome'=> 'joao',
	'idade'=> 20
));

array_push($pessoas, array(
	'nome'=> 'Glaucio',
	'idade'=> 25
));

echo json_encode($pessoas);



?>