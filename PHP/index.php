<?php
require "connect.php";
$sql = " INSERT INTO flights ( Origin, Destination, Duration) VALUES ("Ha Noi", "Paris", "4000");
$conn->query($sql);
$conn->close();
?>