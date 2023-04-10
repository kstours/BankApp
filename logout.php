<?php
session_unset();
session_destroy();

header('Location:https://ptrbankapp2.azurewebsites.net/BankMain.php');
?>