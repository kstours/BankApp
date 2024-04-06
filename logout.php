<?php
session_start();
#$_SESSION["account"] = 0;
session_unset();
session_destroy();

header('Location:https://jwu-bankapp-dev1.azurewebsites.net/BankMain.php');
?>