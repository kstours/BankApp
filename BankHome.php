<?php
        session_start();
?>
<html>
    <body>
        <h1>Account Options</h1><br><br> 
        <?php
        echo "Account Number: ".$_POST["AcntNum"];
        $Accnt = $_POST["AcntNum"];
        $_SESSION["account"] = $Accnt;
        $url= "https://ptrbankapp2.azurewebsites.net/svculookup2.php?acntnumb=".$_SESSION["account"];
        $response = file_get_contents($url);
        echo "<br>Account Name: ";
        echo $response;
        $url= "https://ptrbankapp2.azurewebsites.net/getbalance.php?acntnumb=$Accnt";
        $response = file_get_contents($url);
        echo "<br><br>Balances: <br>";
        echo $response;
        ?>
        <br><br>
        <h2>Available Account Actions:</h2><br><br>
        <p>
        <?php
        echo 'Make a Credit Card Payment';
        echo '<form method="POST" action=paycc.php?acntnumb='.$Accnt.'>
            <input type="submit"/>
            </form>';
        ?>
        <br><br>
        <p>
        <button onclick="window.location.href='BankMain.php';">
            Logout
    </body>

</html>
