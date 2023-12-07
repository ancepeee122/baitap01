<?php
require "connect.php";
$spl = "SELECT * FROM flights";
$result = $conn->query($sql);
print_r($result);
$conn->close();
?>