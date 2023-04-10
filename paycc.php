<?php
session_start();
?>

<html>
    <body>
        <h1>Make Payment</h1><br><br> 
        <p>
<?php

#$AcntNum = $_GET['acntnumb'];
echo 'Session val: '.$_SESSION["account"];
$AcntNum = $_SESSION["account"];
echo '<br>Account Number: '.$AcntNum;
$url= "https://ptrbankapp2.azurewebsites.net/payment.php?acntnumb=".$_SESSION["account"];
$response = file_get_contents($url);
echo "<br>Payment Status: <br>";
echo $response;
?>

    </body>
        <br><a id="enter" href="getinfo.php">Back to Options</a><br>
        <a id="enter" href="BankHome.php">Log Out</a><br><br>
    </body>