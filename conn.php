<?php
session_start();
$servername = "localhost";
$username = "webxzgjw_meritlineuser";
$password = "2wd;?chPQXmo";
$dbname = "webxzgjw_emosjjbj_meritline";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
