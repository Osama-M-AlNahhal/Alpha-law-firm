<?php
$servername = "localhost";
$username = "osama";
$password = "Osama@120181040";
$dbname = "alphaDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}