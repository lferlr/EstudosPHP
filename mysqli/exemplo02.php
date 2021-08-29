<?php

$conn = new mysqli("localhost", "root", "123456", "sakila");

if ($conn->connect_error) {
  echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM address WHERE district = 'England'");

$data = array();

while ($row = $result->fetch_assoc()) {
  //var_dump($row);
  array_push($data, $row);
}

echo json_encode($data);

?>