<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("brenon paul");
$cad->setEmail("brenonpaul@gmail.com");
$cad->setSenha("123456");


$cad->registrarVenda();
?>