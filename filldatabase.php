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
    $stmt = 'insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24200, "King, Stephen" ,100.00,100.00)';
    echo "<br>";
    echo $stmt;
    mysqli_stmt_execute($stmt);
    printf($stmt);
    mysqli_stmt_close($stmt);
    echo '<br>entry added';
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