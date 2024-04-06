<?php
#accepts POST value of accnt num and returns CHK and CC Balance

$AcntNum = $_GET['acntnumb'];
$Query = "SELECT * FROM userdata WHERE ID=".$AcntNum;
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
    echo "<br>Checking Balance :".$row['CHKBAL'];
    echo "<br>Credit Card Balance :".$row['CCBAL'];
}catch (PDOException $e) {
    die('<br>Select ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

#print $response;
?>