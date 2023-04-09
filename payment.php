<?php

$Payment = $_POST['payment'];
$Accntnum = $_POST['Accnt'];
echo '<br>Payment: '.$Payment;
echo '<br>Account: '.$Accntnum;

$Query = "SELECT * FROM userdata WHERE ID=".$Accntnum;

require "config.php";

try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    echo "<br>Checking Balance :".$row['CHKBAL'];
    echo "<br>Credit Card Balance :".$row['CCBAL'];
    echo "<br>";
    $CHKBAL = floatval($row['CHKBAL']);
    $CCBAL = floatval($row['CCBAL']);
    $CHKBAL = $CHKBAL - $Payment;
    $CCBAL = $CCBAL - $Payment;
    echo "<br>New CHK Balance: ";
    echo $CHKBAL;
    echo "<br>New CC Balance: ";
    echo $CCBAL;
    $sql = "UPDATE userdata SET CHKBAL =".$CHKBAL.",CCBAL=".$CCBAL." WHERE ID=".$Accntnum;
    echo "<br>".$sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("Location:BankHome.php");

}catch (PDOException $e) {
    die('<br>Select ERROR: '.$e->getMessage());
}

unset($conn);
$conn = null;

?>