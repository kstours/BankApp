<?php
session_start();
#$_SESSION["account"] = 0;
session_unset();
session_destroy();
include 'evironment.php';

header('$environment/BankMain.php');
?>