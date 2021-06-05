<?php

$pessoa = array(
  'nome' => 'João',
  'idade' => 20
);

// & => O value desse array está passando por referência
foreach ($pessoa as &$value) {
  if (gettype($value) === 'interger') $value += 10;
  echo $value . '<br>';
}

print_r($pessoa);

?>