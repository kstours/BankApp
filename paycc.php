<html>
    <body>
        <p>Make Payment<p><br><br> 
<?php
session_start();
$AcntNum = $_GET['acntnumb'];
#$AcntNum = "306655";
echo 'Account Number: '.$AcntNum;
echo '<br>Session variable: '.$_SESSION["account"];
echo '<br>Test Value: '.$_SESSION["testvalue"];

$Query = "SELECT * FROM userdata WHERE ID=".$AcntNum;
require "config.php";

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
        <form action="payment.php" method="post">
            Ammount of Payment: <input type="text" name="payment"><br>
            <?php
            echo '<input type="hidden" id="Accnt" name="Accnt" value='.$AcntNum.'>';
            ?>
            <input type="submit">
        </form>

    </body>
        <br><a id="enter" href="getinfo.php">Back to Options</a><br>
        <a id="enter" href="BankMain.php">Log Out</a><br><br>
    </body>