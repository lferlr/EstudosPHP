<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo "Antes: " . $dt -> format('d/m/Y H:i:s');

$dt -> add($periodo);

echo "<br>";

echo "Depois: " . $dt -> format('d/m/Y H:i:s');

?>