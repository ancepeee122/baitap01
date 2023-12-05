<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'myDB';
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connection_error)
{
  die('Connection failed:' . $conn->connection_error);

}
echo "Connected successfully <br>";
?>