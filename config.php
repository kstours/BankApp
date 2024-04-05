<?php
$servername = "jwu-bankapp-dev1-server.mysql.database.azure.com";
$username = "dqnceprrxt";
$password = "tX24DD!ss468";
$dbname = "jwu-bankapp-dev1-database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connect Error: " . $e->getMessage();
}
?>
