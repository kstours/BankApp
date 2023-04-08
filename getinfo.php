<html>
    <body>
        <p>Account Options<p><br><br> 
        <?php
        echo "Account Number: ".$_POST["AcntNum"];
        $Accnt = $_POST["AcntNum"];
        $url= "https://ptrbankapp2.azurewebsites.net/svculookup2.php?acntnumb=$Accnt";
        $response = file_get_contents($url);
        echo "<br>Account Name: ";
        echo $response;
        ?>
        <br><br>
        <p>Available Account Actions:<p><br><br>
        <a id="balance" href="ceckbal.php">Check Balances</a><br><br>
        <a id="paycc" href="paycc.php">Pay Credit Card</a><br><br>
        <a id="enter" href="BankMain.php">Log Out</a><br><br>
    </body>

</html>
