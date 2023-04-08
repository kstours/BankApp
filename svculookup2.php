<?php

$AcntNum = $_GET['acntnumb'];
#echo $AcntNum;
$Query = "SELECT ID, FNAME FROM userdata WHERE ID=$AcntNum";

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
    $sql ="Select * from userdata WHERE ID=$AcntNum";
    $row=$dbo->query($Query);
    $row=$row->fetch();
    echo $row['FNAME'];
}catch (PDOException $e) {
    die('ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

#print $response;
?>
