<?php
$uid = $_POST['User name'];
$type = $_POST['Question: TYPE'];
$code = $_POST['Barcode'];
$timestamp = $_POST['Timestamp (Scanned)'];

echo $uid." ".$type." ".$code." ".$timestamp;


?>