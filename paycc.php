<?php
session_start();
?>

<html>
    <body>
        <h1>Make Payment</h1><br><br> 
        <p>
<?php

#$AcntNum = $_GET['acntnumb'];
echo 'Session val: '.$_SESSION{"account"};
$AcntNum = $_SESSION["account"];
echo '<br>Account Number: '.$AcntNum;

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

?>
        </p>
        <form action="payment.php" method="post">
            Ammount of Payment: <input type="text" name="payment"><br>
            <?php
            echo '<input type="hidden" id="Accnt" name="Accnt" value='.$AcntNum.'>';
            ?>
            <input type="submit">
        </form>

    </body>
        <br><a id="enter" href="getinfo.php">Back to Options</a><br>
        <a id="enter" href="BankHome.php">Log Out</a><br><br>
    </body>