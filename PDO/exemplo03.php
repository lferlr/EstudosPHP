<?php

$conn = new PDO("mysql:dbname=sakila;host=localhost", "root", "123456");

$stmt = $conn->prepare("UPDATE actor SET first_name = :FIRST_NAME, last_name = :LAST_NAME WHERE actor_id = :ID");

$name = "Lucas";
$finalname = "Fernandes";
$id = 1;

$stmt->bindParam(":FIRST_NAME", $name);
$stmt->bindParam(":LAST_NAME", $finalname);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados com sucesso!!";

?>