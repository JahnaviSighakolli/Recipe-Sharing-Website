<?php
$servername = "localhost";
$username = "root";
$password = "211FA04114";
$dbname = "details";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $email = $_POST['mail'];
    $mobile = $_POST['mbno'];
    $password = $_POST['pswd'];
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "INSERT INTO users (username, email, mobile, password) VALUES ('$username', '$email', '$mobile', '$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: login.html");
        exit();
    } else {
        header("Location: signup.html");
    }
}
mysqli_close($conn);
?>