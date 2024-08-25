<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "211FA04114";
$dbname = "details";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $username = $_POST['uname'];
    $password = $_POST['pswd'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $userDetails = $result->fetch_assoc();
        $_SESSION['username'] = $userDetails['username'];
        $_SESSION['userDetails'] = $userDetails;
        $_SESSION['userId'] = $userDetails['id']; 
        header("Location: home.html");
        exit();
    } else {
        header("Location: signup.html");
    }
    $conn->close();
}
?>