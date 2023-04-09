<html>
    <body>
        <p>Account Balances<p><br><br> 

<?php

$AcntNum = $_GET['acntnumb'];
#$AcntNum = "306655";
echo 'Account Number: '.$AcntNum;

$Query = "SELECT * FROM userdata WHERE ID=".$AcntNum;
require "config.php";

try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    echo "<br>Checking Balance :".$row['CHKBAL'];
    echo "<br>Credit Card Balance :".$row['CCBAL'];
}catch (PDOException $e) {
    die('Select ERROR: '.$e->getMessage());
}
unset($conn);
$conn = null;

#print $response;
?>

        <a id="enter" href="BankMain.php">Log Out</a><br><br>
    </body>