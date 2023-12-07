<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" herf="4-search.css">

</head>
<body>
  <h1> SEARCH FLIGHT </h1>
  <form method="get" action="" name="register">
    Origin <input type="text" name="origin"/><br>
    Destination <input type="text" name="destination"/><br>
    <input type ="submit" value="Search"/> <br>
</form>
<?php
if (isset($_GET['origin']))
{
  $origin = $_GET['origin'];
  $destination = $_GET['destination'];
  require 'connect.php';
  mysql_set_charset($conn, 'UTF8');
  $sql = "SELECT * FORM flights WHERE origin = '$origin' and destination = '$destination'";
  $result  = $conn->query($sql);
  require('4-displayFlight.php');
  $conn->close();
}
?>
</body>
</html>