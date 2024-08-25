<?php
$servername = "localhost";
$username = "root";
$password = "211FA04114";
$dbname = "details";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>