<!DOCTYPE html>
<html>
<body>
<h1>Add Record to Database</h1>
<p>Authorized Use Only</p><br><br>

<?php
require "config.php";

echo $servername; 
echo $username; 
echo $password ;
echo $dbname;
echo " ";
//Establishes the connection
try  {
    $conn = mysqli_init();
    mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
} catch (Exception $e)  {
    echo 'Failed to connect to MySQL: '.$e->getMessage();
}

//Create an Insert prepared statement and run it
try {
    $stmt = "insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24200, 'King, Stephen' ,100.00,100.00)";
    mysqli_stmt_execute($stmt);
    printf($stmt);
    mysqli_stmt_close($stmt);
}catch (Exception $e)  {
    echo 'Failed to insert to MySQL: '.$e->getMessage();
}
// Close the connection
mysqli_close($conn);
?>

<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>