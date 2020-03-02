<?php

class Pessoa {

	public $nome;//atributo

	public function falar(){//método

		return "o meu nome é ".$this->nome;

	}

}

$brenon = new Pessoa();
$brenon->nome = "Brenon Paul";
echo $brenon->falar();

?>
