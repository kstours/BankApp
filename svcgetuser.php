<?php

$AcntNum = $_GET['acntnumb'];
$Query = "SELECT * FROM userdata WHERE ID=$AcntNum";

$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";
$response ="NoValueSet";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  #echo "<br>connection established<br>";


} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    $response = $row['FNAME'];
    echo strlen($response);
    if (strlen($response) < 1) {
      $response != "invalid account number ";
      }
    echo $response;
}catch (PDOException $e) {
    die('ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

#print $response;
?>
