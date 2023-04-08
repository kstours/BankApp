<?php
$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";
$sql = "CREATE TABLE UserData (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  FNAME VARCHAR(30),
  CHKBAL  DECIMAL(8,2),
  CCBAL DECIMAL(8,2)
  )";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $conn->exec($sql);
  echo "Table created successfully";
  $conn = null
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>