<?php

$a = 10;

// & => atribui o valor diante do código, ou seja transforma e soma
function trocaValor(&$b){
  $b += 50;
  return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

?>