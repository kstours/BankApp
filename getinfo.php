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
        <?php
        echo 'Check your balances       ';
        echo '<form method="POST" action=checkbal.php?acntnumb='.$Accnt.'>
            <input type="submit"/>
            </form>';
        echo 'Make a Payment       ';
        echo '<form method="POST" action=paycc.php?acntnumb='.$Accnt.'>
            <input type="submit"/>
            </form>';
        ?>

        <a id="enter" href="BankMain.php">Log Out</a><br><br>

    </body>

</html>
