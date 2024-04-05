<?php
#ob_start();

$Payment = $_GET['payment'];
$Accntnum = $_GET['Accnt'];

$Query = "SELECT * FROM userdata WHERE ID=".$Accntnum;

require "config.php";

try {
    $row=$conn->query($Query);
    $row=$row->fetch();
    $CHKBAL = floatval($row['CHKBAL']);
    $CCBAL = floatval($row['CCBAL']);
    if ($CHKBAL > $Payment) {
        $CHKBAL = $CHKBAL - $Payment;
        $CCBAL = $CCBAL - $Payment;
        $sql = "UPDATE userdata SET CHKBAL =".$CHKBAL.",CCBAL=".$CCBAL." WHERE ID=".$Accntnum;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "success";
    } else {
        echo "<h2> insufficient balance<h2><p> ";
    }

}catch (PDOException $e) {
    die('<br>Select ERROR: '.$e->getMessage());
}

unset($conn);
$conn = null;
#header('Location:https://jwu-bankapp-dev1.azurewebsites.net/BankHome.php');
#ob_end_flush();
exit;

?>