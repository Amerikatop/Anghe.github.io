<?php
$server = 'localhost';
$username = 'root';
$database = 'login';
$password = '';
// Create connection
$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO personal (id, usuario, password) VALUES ('id', 'usuario', 'password')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
