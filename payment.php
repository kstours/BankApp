<?php

$Payment = $_POST['payment'];
$Accntnum = $_POST['Accnt'];
echo '<br>Payment: '.$Payment;
echo '<br>Account: '.$Accntnum;

$Query = "SELECT * FROM userdata WHERE ID=".$Accntnum;
echo '<br>'.$Query;
require "config.php";

try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    echo "<br>Checking Balance :".$row['CHKBAL'];
    echo "<br>Credit Card Balance :".$row['CCBAL'];
    echo "<br";
    $CHKBAL = floatval($row['CHKBAL']);
    $CHKBAL = $CHKBAL - $Payment;
    echo "<br>New Balance: ";
    echo $CHKBAL;

    var_dump(is_float($CHKBAL));
}catch (PDOException $e) {
    die('<br>Select ERROR: '.$e->getMessage());
}

unset($conn);
$conn = null;

?>