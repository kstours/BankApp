<?php

$AcntNum = $_GET['acntnumb'];
$Query = "SELECT * FROM userdata WHERE ID=$AcntNum";

$response ="NoValueSet";

require "config.php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connect Error: " . $e->getMessage();
}

try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    $response = $row['FNAME'];
    if (strlen($response) < 1) {
      $response = "invalid account number ";
      }
    echo $response;
}catch (PDOException $e) {
    die('ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

?>
