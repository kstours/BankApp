<?php
session_start();
?>

<html>
    <body>
        <h1>Make Payment</h1><br> 
        <p>
<?php
$_SESSION["payment"] = $_GET["payment"];

$url= "https://jwu-bankapp-dev1.azurewebsites.net/svcpayment.php?Accnt=".$_SESSION["account"]."&payment=".$_SESSION["payment"];
$response = file_get_contents($url);

echo "<br>Payment to Credit card: ".$_SESSION["payment"]."<br>";
echo $response;

$url= "https://jwu-bankapp-dev1.azurewebsites.net/svcgetbalance.php?acntnumb=".$_SESSION["account"];
$response = file_get_contents($url);
echo "<p><br><br>Balances: <br>";
echo $response;
?>

    </body>
        <br><br><br>
        <p>
        <button id="options", onclick="window.location.href='BankHome.php';">
            Account Options</button>
        <br><br>
        <button id="logout", onclick="window.location.href='logout.php';">
            Logout</button>
    </body>