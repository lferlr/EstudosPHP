<?php

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'João',
  'idade' => 27
));

array_push($pessoas, array(
  'nome' => 'Lucas',
  'idade' => 20
));

//O encode faz um Array virar um JSON
echo json_encode($pessoas);

?>