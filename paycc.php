<?php
session_start();
?>

<html>
    <body>
        <h1>Make Payment</h1><br><br> 
        <p>
<?php
$_SESSION["payment"] = $_GET["payment"];

$url= "https://ptrbankapp2.azurewebsites.net/payment.php?Accnt=".$_SESSION["account"]."&payment=".$_SESSION["payment"];
$response = file_get_contents($url);

echo "<br>Payment to Credit card: ".$_SESSION["payment"]."<br>";
echo $response;

$url= "https://ptrbankapp2.azurewebsites.net/getbalance.php?acntnumb=".$_SESSION["account"];
$response = file_get_contents($url);
echo "<br><br>New Balances: <br>";
echo $response;
?>

    </body>
        <br><br><br>
        <a id="enter" href="BankHome.php">Back to Options</a><br>
        <a id="enter" href="index.html">Log Out</a><br><br>
    </body>