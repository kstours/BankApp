<p>Authorized Use Only</p>
<?php

$AcntNum = $_GET['acntnumb'];
echo $AcntNum;
$Queary = "SELECT ID, FNAME FROM userdata WHERE ID=$AcntNum";

$servername = "ptrbankapp2-server.mysql.database.azure.com";
$username = "srkxelcnue";
$password = "31VNTO0TBI673202$";
$dbname = "ptrbankapp2-database";
$response ="NoValueSet";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
try {
    $sql ="Select * from userdata WHERE ID=$AcntNum";
    $res = $conn->query($sql);
    if (res->rowCount() > 0) {
        while ($row = $res->fetch()) {
            echo $row['FNAME'];
            $response = $row['FNAME'];
        }
        unset($res);
    } else {
        echo "NoRecord";
    }



}catch (PDOException $e) {
    die('ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

print $response;
?>
