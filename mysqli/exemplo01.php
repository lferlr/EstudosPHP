<?php

$conn = new mysqli("localhost", "root", "123456", "sakila");

if ($conn->connect_error) {
  echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "User";
$pass = "12345";

$stmt->execute();

?>