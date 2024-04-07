<?php
        session_start();
        ob_start();
        include 'environment.php';
?>
<html>
    <body>
        <h1>Account Options</h1><br><br>
        <?php
        if (strlen($_SESSION["account"]) < 3){
            $_SESSION["account"] = $_POST["AcntNum"];
        }
        echo "Account Number: ".$_SESSION["account"];
        $url= "$environment/svcgetuser.php?acntnumb=".$_SESSION["account"];
        $response = file_get_contents($url);
        if ($response != "invalid account number ") {
            echo "<br>Account Name: ";
            echo $response;
            $url= "$environment/svcgetbalance.php?acntnumb=".$_SESSION["account"];
            $response = file_get_contents($url);
            echo "<br><br>Balances: <br>";
            echo $response;
        } else{
            header('Location:/invalid.php');
            ob_end_flush();
        }

        
        ?>
        <br><br>
        <h2>Available Account Actions:</h2>
        <p>Make Payment to Credit Card<p>
        <form action="paycc.php" method="get">
            Amount of Payment: <input type="text" name="payment"><br>
            <?php
            echo '<input type="hidden" id="Accnt" name="Accnt" value='.$_SESSION["account"].'>';
            ?>
            <input type="submit", id='submit'>
        </form>

        <br><br>
        <p>
        <button, id="logout", onclick="window.location.href='logout.php';">
            Logout</button>
    </body>

</html>
