<!DOCTYPE html>
<html>
<body>
<h1>Application Status</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p><br><br>
<?php

require 'config.php';

echo " PHP is working<br><br>";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<br>Database is online";
} catch(PDOException $e) {
  echo "Database Connection Failed: " . $e->getMessage();
}

$conn = null;

?>

<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>
