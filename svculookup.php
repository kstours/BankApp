<?php

$AcntNum = $_GET['acntnumb'];
if ($AcntNum == "6789") {
    $response = "Smith,Jason";
} else {
    $response = "Jones,Mellisa";
}

print $response;
?>
