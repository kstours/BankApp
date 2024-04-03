<?php
session_start();
#$_SESSION["account"] = 0;
session_unset();
session_destroy();

header('Location:https://jwu-bankapp.azurewebsites.net/BankMain.php');
?>