<?php

require_once("config.php");

$cad = new Cadastro();
$cad->setNome("Lucas Rodrigues");
$cad->setEmail("lucasflr@gmail.com");
$cad->setSenha("Lucaslindo");

echo $cad;

?>