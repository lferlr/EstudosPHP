<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lucas Rodrigues");
$cad->setEmail("lucasflr@gmail.com");
$cad->setSenha("Lucaslindo");

$cad->registrarVenda();

echo $cad;

?>