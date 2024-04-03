<h1>Application Status</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p>
<?php
$host = "jwu-bankapp-server.mysql.database.azure.com";
$username = "ogvxwnfife";
$password = "tX24DD$ss468";
$db_name = "jwu-bankapp-database";

echo " PHP is working";

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM Products');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($conn);

?>
<br><br><a id="querytest" href="testquery.php">Run Test Query</a><br><br>
<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>