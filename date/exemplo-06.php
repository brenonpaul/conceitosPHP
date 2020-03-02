<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

//acrescentando 15 dias 
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo"<br>";

echo $dt->format("d/m/Y H:i:s");

?>