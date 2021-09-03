<?php

$conn = new PDO("mysql:dbname=sakila;host=localhost", "root", "123456");

$stmt = $conn->prepare("SELECT * FROM sakila.actor ORDER BY first_name");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
  
  foreach ($row as $key => $value) {
    echo "<strong>" . $key . "</strong>" . $value . "<br>";
  }
  echo "============================ <br>";
}

var_dump($results);

?>