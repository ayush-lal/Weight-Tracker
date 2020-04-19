<?php
// Connect to database
// Use "localhost" if you are hosting this on the same Server as your Database
// $dbServerName = "localhost";
$dbServerName = "[Server name where your Database is Hosted]";
$dbUserName = "[Database Username]";
$dbPassword = "[Database Password]";
$dbName = "[name of your Database]";

// Begin establishing a connection
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);