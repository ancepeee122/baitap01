<?php
require "connect.php";
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
  while($row = $result->fecth_assoc())

  {
    echo "FlightID:" . $row["id"].
         "Origin :" . $row["origin"].
         "Destination:" . $row["destination"].
         "Duration:" . $row["duration"]. "<br>";

  }
}
else {
  echo "No flight in database";

}
$conn->close();
?>