<?php

$nome = "Lucas Fernandes";

$nome = strtoupper($nome);

echo $nome . " - Tudo maiusculo";

$nome = strtolower($nome);

echo "<br>";

echo $nome . " - Tudo minusculo";

echo "<br>";

echo ucfirst($nome) . " - Somente a primeira da frase em Maiusculo";

echo "<br>";

echo ucwords($nome) . " - Todas as palavras da frase com a primeira letra em Maiusculo";

?>