<!DOCTYPE html>
<html>
<body>
<h1>System Management Page</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p><br><br>
<?php
$servername = "jwu-bankapp-dev1-server.mysql.database.azure.com";
$username = "dqnceprrxt";
$password = "tX24DD!ss468";
$dbname = "jwu-bankapp-dev1-database";

echo "Host: $servername   DB: $dbname<br><br>";

echo " PHP is working<br><br>";

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
<br><br><a id="createtable" href="createtable.php">Create Table</a><br><br>
<br><br><a id="addrecord" href="filldatabase.php">Add Record</a><br><br>

<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>
