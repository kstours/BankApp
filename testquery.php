<?php
$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT ID,, FNAME CHKBAL, CCBAL FROM USERDATA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Acct num: " . $row["ID"]. " - Name: " . $row["FNAME"]. " Checking: " . $row["CHKBAL"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn = null;
?>

<br><br><a id="enter" href="BankMain.php">Return to Main Page</a><br><br>