<?php
require "config.php";

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Create an Insert prepared statement and run it
$stmt = "insert into userdata (ID, FNAME, CHKBAL, CCBAL) values (24200, 'King, Stephen' ,100.00,100.00)";
mysqli_stmt_execute($stmt);
printf($stmt);
mysqli_stmt_close($stmt);

// Close the connection
mysqli_close($conn);
?>