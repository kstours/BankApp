<?php
$servername = "jwu-bankapp-server.mysql.database.azure.com";
$username = "ogvxwnfife";
$password = "tX24DD$ss468";
$dbname = "jwu-bankapp-database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connect Error: " . $e->getMessage();
}
?>
