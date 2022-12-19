<?php

$server = 'sql10.freesqldatabase.com';
$username = 'sql10585340';
$password = 'QF9dnh8bTs';
$database = 'sql10585340';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>
