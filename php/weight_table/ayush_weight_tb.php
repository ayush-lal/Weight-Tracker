<?php
  // File used for the initial page load of weight data into the HTML table in ayush.php

  include_once '../../dbconnect/db_info.php';

  echo "<table id='tb' class='content-table is-striped'>";
  echo "<tr>";
  echo "<th>Person</th>";
  echo "<th>Weight (Kg)</th>";
  echo "<th>Date</th>";
  echo "</tr>";

  $month = date('m');

  if ($month == "01") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'January' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "02") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'February' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "03") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'March' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "04") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'April' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }
        
  elseif ($month == "05") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'May' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "06") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'June' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "07") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'July' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "08") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'August' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "09") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'September' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "10") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'October' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "11") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'November' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  elseif ($month == "12") {
    $sql = "SELECT * from WeightTracker WHERE person = 'Ayush' AND date_month = 'December' ORDER BY weight_date DESC";
    $result = mysqli_query($conn, $sql);
    $x = 0;
      if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          if ($x % 2 == 0) {
            $bgcolour = oddbg;
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
  }

  else {
    echo "Error finding weight data from ayush_weight_tb.php";
  }

  $conn-> close();
?>