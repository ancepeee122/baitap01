<?php 
$severname = 'localhost';
$username = ' root ';
$password = "";
$db = 'mydatabase';
$conn = new mysqli($severname, $username, $password, $db);
if ($conn->connection_error)
{
    die("connect failed:" . $conn->connect_error);

}
echo "Connected successfully <br>";
?>