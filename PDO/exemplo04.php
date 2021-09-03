<?php

$conn = new PDO("mysql:dbname=sakila;host=localhost", "root", "123456");

$stmt = $conn->prepare("DELETE FROM actor WHERE actor_id = :ID");

$id = 201;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluidos com sucesso!!";

?>