<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
// Create connection
$db = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>