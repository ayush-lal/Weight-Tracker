<?php
// This is used to collect data for the Dropdown menu in ayush.php which will dynamically change the data chart.js data.

include_once '../dbconnect/db_info.php';

$sql = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'January'";
$result = mysqli_query($conn, $sql);

$jan= [];
while($rowItem=$result-> fetch_assoc()) {
  extract($rowItem);
  $jan[]= (float)$kg;
  $jan2[] = $weight_date;
}

$sql2 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'February'";
$result2 = mysqli_query($conn, $sql2);

$feb= [];
while($rowItem2=$result2-> fetch_assoc()) {
  extract($rowItem2);
  $feb[]= (float)$kg;
  $feb2[] = $weight_date;
}

$sql3 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'March'";
$result3 = mysqli_query($conn, $sql3);

$march= [];
while($rowItem3=$result3-> fetch_assoc()) {
  extract($rowItem3);
  $march[]= (float)$kg;
  $march2[] = $weight_date;
}

$sql4 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'April'";
$result4 = mysqli_query($conn, $sql4);

$april= [];
while($rowItem4=$result4-> fetch_assoc()) {
  extract($rowItem4);
  $april[]= (float)$kg;
  $april2[] = $weight_date;
}

$sql5 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'May'";
$result5 = mysqli_query($conn, $sql5);

$may= [];
while($rowItem5=$result5-> fetch_assoc()) {
  extract($rowItem5);
  $may[]= (float)$kg;
  $may2[] = $weight_date;
}

$sql6 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'June'";
$result6 = mysqli_query($conn, $sql6);

$june= [];
while($rowItem6=$result6-> fetch_assoc()) {
  extract($rowItem6);
  $june[]= (float)$kg;
  $june2[] = $weight_date;
}

$sql7 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'July'";
$result7 = mysqli_query($conn, $sql7);

$july= [];
while($rowItem7=$result7-> fetch_assoc()) {
  extract($rowItem7);
  $july[]= (float)$kg;
  $july2[] = $weight_date;
}

$sql8 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'August'";
$result8 = mysqli_query($conn, $sql8);

$aug= [];
while($rowItem8=$result8-> fetch_assoc()) {
  extract($rowItem8);
  $aug[]= (float)$kg;
  $aug2[] = $weight_date;
}

$sql9 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'September'";
$result9 = mysqli_query($conn, $sql9);

$sep= [];
while($rowItem9=$result9-> fetch_assoc()) {
  extract($rowItem9);
  $sep[]= (float)$kg;
  $sep2[] = $weight_date;
}

$sql10 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'October'";
$result10 = mysqli_query($conn, $sql10);

$oct= [];
while($rowItem10=$result10-> fetch_assoc()) {
  extract($rowItem10);
  $oct[]= (float)$kg;
  $oct2[] = $weight_date;
}

$sql11 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'November'";
$result11 = mysqli_query($conn, $sql11);

$nov= [];
while($rowItem11=$result11-> fetch_assoc()) {
  extract($rowItem11);
  $nov[]= (float)$kg;
  $nov2[] = $weight_date;
}

$sql12 = "SELECT * FROM WeightTracker WHERE person = 'Ayush' AND date_month = 'December'";
$result12 = mysqli_query($conn, $sql12);

$dec= [];
while($rowItem12=$result12-> fetch_assoc()) {
  extract($rowItem12);
  $dec[]= (float)$kg;
  $dec2[] = $weight_date;
}
