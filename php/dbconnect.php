<?php
$servername = "localhost";
$username   = "albeenek_Clofident";
$password   = "^XeU.cWZ7;{[";
$dbname     = "albeenek_clofident";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>