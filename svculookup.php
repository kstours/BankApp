<?php

$AcntNum = $_GET['acntnumb'];
if ($AcntNum == "6789") {
    $response = "Smith,Jason "+$AcntNum;
} else {
    $response = "Jones,Mellisa "+ $AcntNum;
}

print $response;
?>
