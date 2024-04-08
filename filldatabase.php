<!DOCTYPE html>
<html>
<body>
<h1>Add Records to Database</h1>
<p>Authorized Use Only</p><br><br>

<?php
require "config.php";


echo "Attempting record add...<br> ";
//Establishes the connection
try  {
    $conn = mysqli_init();
    mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
    echo '<br>connection established';
} catch (Exception $e)  {
    echo '<br>Failed to connect to MySQL: '.$e->getMessage();
}

//Create an Insert prepared statement and run it
try {
    $stmt = 'insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24120, "Poe, Edgar" ,1000.00,400.00)';
    echo "<br>";
    echo $stmt;
    if ($conn->query($stmt) == True) {
        echo '<br>entry added';
    } else {
        echo '<br>entry failed';
    }
    $stmt = 'insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24120, "Wells, H.G." ,10000.00,300.00)';
    echo "<br>";
    echo $stmt;
    if ($conn->query($stmt) == True) {
        echo '<br>entry added';
    } else {
        echo '<br>entry failed';
    }
    $stmt = 'insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24120, "Bledsoe, Drew" ,15000.00,600.00)';
    echo "<br>";
    echo $stmt;
    if ($conn->query($stmt) == True) {
        echo '<br>entry added';
    } else {
        echo '<br>entry failed';
    }
    }catch (Exception $e)  {
        echo '<br>Failed to insert to MySQL: '.$e->getMessage();
}
// Close the connection
mysqli_close($conn);
?>

<br><br><p>Authorized Use Only</p><br><br>
<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>