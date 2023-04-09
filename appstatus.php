<!DOCTYPE html>
<html>
<body>
<h1>Application Status</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p>
<?php
$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";

echo " PHP is working";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<br>Database is online";
} catch(PDOException $e) {
  echo "Databse Connection Failed: " . $e->getMessage();
}
$conn = null;

?>
<br><br><a id="querytest" href="testquery.php">Run Test Query</a><br><br>
<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>