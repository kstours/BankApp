<?php

$AcntNum = $_GET['acntnumb'];
$Queary = "SELECT ID, FNAME FROM userdata WHERE ID=$AcntNum";

$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare($Queary);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $response = $result;

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

print $response;
?>
