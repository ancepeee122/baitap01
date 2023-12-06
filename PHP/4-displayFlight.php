<?php 
if ($result->num_rows > 0)
{
    echo '<table border='1' width=50% align='center'>
    <caption> <b> Bang thong tin chuyen bay </caption>
    <tr>
      <th>ID</th>
      <th>Origin</th>
      <th>Destination</th>
      <th>Duration</th>
      </tr>';
      while($row = $result->fetch_assoc())
      {
        if ($row['id']%2==0)
        {
            echo "<tr class='odd'><td>" . $row['id']. '</td>';

        }
        else
        {
            echo '<tr class='even'><td>' $row['id']. '</td>'
        }
        echo '<td> '. $row['Origin']. '</td>'
        echo '<td> '. $row['Destination']. '</td>'
        echo '<td> '. $row['Duration']. '</td>'
      }
}
else{
    echo ' No flight in database';
}
?>