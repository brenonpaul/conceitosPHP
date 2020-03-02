<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{

		echo "o veiculo acelorou até ". $velocidade . "km/h";

	}

	public function frenar($velocidade)
	{

		echo "o veiculou frenou até" . $velocidade . "km/h";

	}

	public function trocarMarcha($marcha)
	{

		echo "o veiculo engatou a marcha " . $marcha;
	}
}

?>