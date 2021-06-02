<?php

$json = '[{ "nome": "João", "idade": 27 }, { "nome": "Lucas", "idade": 20 }]';

//O decode faz o JSON voltar para um array
$data = json_decode($json, true);

var_dump($data);


?>