<?php
//This connection.php file will submit the form data from index.html to the Database based on the current month

//[Error Handling]error_reporting(E_ALL); ini_set('display_errors', 1);
include_once 'dbconnect/db_info.php';

$weight = $_POST['weight'];
$person = $_POST['person'];
$date = $_POST['weightdate'];
$formatDate = date("d/m/y", strtotime($date));

if(date("m", strtotime($date)) == date("01")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'January');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("02")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'February');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("03")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'March');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("04")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'April');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("05")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'May');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("06")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'June');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("07")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'July');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("08")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'August');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("09")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'September');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("10")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'October');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("11")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'November');";
    $result = mysqli_query($conn, $sql);
}
elseif(date("m", strtotime($date)) == date("12")) {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date, date_month) VALUES ('$person', '$weight', '$formatDate', 'December');";
    $result = mysqli_query($conn, $sql);
}
else {
    $sql = "INSERT INTO WeightTracker (person, kg, weight_date) VALUES ('$person', '$weight', '$date');";
    $result = mysqli_query($conn, $sql);
}