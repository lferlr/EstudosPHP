<?php

$conn = new PDO("mysql:dbname=sakila;host=localhost", "root", "123456");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM actor WHERE actor_id = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Dados excluidos com sucesso!!";

?>