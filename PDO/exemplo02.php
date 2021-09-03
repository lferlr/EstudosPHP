<?php

$conn = new PDO("mysql:dbname=sakila;host=localhost", "root", "123456");

$stmt = $conn->prepare("INSERT INTO actor (first_name, last_name) VALUES (:FIRST_NAME, :LAST_NAME)");

$name = "Lucas";
$finalname = "Rodrigues";

$stmt->bindParam(":FIRST_NAME", $name);
$stmt->bindParam(":LAST_NAME", $finalname);

$stmt->execute();

echo "Inserido com sucesso!";

?>