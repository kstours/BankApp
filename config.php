<?php
$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>