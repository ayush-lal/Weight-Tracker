<?php
// Each monthly file is used to populate the data into the HTML table in ayush.php

include_once '../../../../dbconnect/db_info.php';

$sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'May' ORDER BY weight_date DESC";
$result = mysqli_query($conn, $sql);
$x = 0;
echo '<table class="content-table">';
echo "<tr>";
echo "<th>Person</th>";
echo "<th>Weight (Kg)</th>";
echo "<th>Date</th>";
echo "</tr>";
if ($result-> num_rows > 0) {
  while ($row = $result-> fetch_assoc()) {
    if ($x % 2 == 0) {
      $bgcolour = oddbg; // Adding a class to <tr></tr> for dynamic styling
    }
    else {
      $bgcolour = evenbg;
    }
      echo "<tbody><tr class='$bgcolour'><td>". $row["person"] ."</td><td>". $row["kg"] ."</td><td>". $row["weight_date"] ."</td></tr></tbody>";
      $x++;
  }
  echo "</table>";
}
else {
    echo "0 results";
}