<?php
require "connect.php";
$sql = " INSERT INTO flights ( Origin, Destination, Duration) VALUES ("Ha Noi", "Paris", "4000");
if ($conn->query($sql === TRUE)
{
  echo "New flights create successfully";
}
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>