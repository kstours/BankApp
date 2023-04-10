<?php
session_start();
#$_SESSION["account"] = 0;
session_unset();
session_destroy();

header('Location:https://ptrbankapp2.azurewebsites.net/BankMain.php');
?>