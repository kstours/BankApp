<!DOCTYPE html>
<html>
<body>
<h1>Create userdata table in DB</h1>
<p>Authorized Use Only</p><br><br>

<?php
require "config.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(PDOException $e) {
    echo "Connect Error: " . $e->getMessage();
  }

echo "Attempting to create table...<br> ";
//Establishes the connection
try  {
    $conn = mysqli_init();
    mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306);
    echo '<br>connection established';
} catch (Exception $e)  {
    echo '<br>Failed to connect to MySQL: '.$e->getMessage();
}

// Run the create table query
if (mysqli_query($conn, '
create table userdata (
    ID int NOT NULL,
    FNAME varchar(50) NOT NULL,
    CHKBAL dec(12,2),
    CCBAL dec(12,2)
    );
')) {
printf("Table created\n");
}

//Close the connection
mysqli_close($conn);
?>

<br><br><p>Authorized Use Only</p><br><br>
<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>