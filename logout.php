<?php
session_start();
#$_SESSION["account"] = 0;
session_unset();
session_destroy();
#include 'environment.php';

header('Location: /BankMain.php');
?>