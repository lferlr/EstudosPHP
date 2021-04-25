<?php

$nome = "Glaucio";

function teste() {
  global $nome;
  echo $nome;
}

function teste2() {
  echo $nome." agora no teste 02";
}

teste();
teste2();

?>