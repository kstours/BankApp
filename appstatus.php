<!DOCTYPE html>
<html>
<body>
<h1>Application Status</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p><br><br>
<?php
$servername = "jwu-bankapp-dev1-server.mysql.database.azure.com";
$username = "dqnceprrxt";
$password = "tX24DD!ss468";
$dbname = "jwu-bankapp-dev1-database";

echo " PHP is working<br><br>";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<br>Database is online";
} catch(PDOException $e) {
  echo "Database Connection Failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT ID, FNAME FROM userdata where ID=998877");

try {
  $row=$conn->query($stmt);
  $row=$row->fetch();
  $response = $row['FNAME'];
  if (strlen($response) < 1) {
    $response = "SQL Test Query FAILED!!";
    }
  echo "SQL Test Query PASSED";
}catch (PDOException $e) {
  die('ERROR: '.$e->getMessage());
}

$conn = null;

?>

<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>
