<?php
        session_start();
?>
<html>
    <body>
        <p>Account Options<p><br><br> 
        <?php
        echo "Account Number: ".$_POST["AcntNum"];
        $Accnt = $_POST["AcntNum"];
        $_SESSION["account"] = $Accnt;
        $_SESSION["testvalue"] = "TestValue";
        echo '<br>Session variable: '.$_SESSION["account"];
        $url= "https://ptrbankapp2.azurewebsites.net/svculookup2.php?acntnumb=$Accnt";
        $response = file_get_contents($url);
        echo "<br>Account Name: ";
        echo $response;
        $url= "https://ptrbankapp2.azurewebsites.net/getbalance.php?acntnumb=$Accnt";
        $response = file_get_contents($url);
        echo "<br><br>Balances: <br>";
        echo $response;
        ?>
        <br><br>
        <p>Available Account Actions:<p><br><br>
        <?php
        echo 'Make a Credit Card Payment';
        echo '<form method="POST" action=paycc.php?acntnumb='.$Accnt.'>
            <input type="submit"/>
            </form>';
        ?>
        <br><br>
        <button onclick="window.location.href='BankMain.php';">
            Logout
    </body>

</html>
