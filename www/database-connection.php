<?php
$servername = "mysql";
$username = "admin";
$password = "adminpw";

try {
  $connection = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $connection;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 