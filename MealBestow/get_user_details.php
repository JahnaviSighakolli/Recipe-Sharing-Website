<?php
session_start(); // Start the session

// Check if user details are set in the session
if (isset($_SESSION['userDetails'])) {
    // Output user details as JSON
    header('Content-Type: application/json');
    echo json_encode($_SESSION['userDetails']);
} else {
    // Handle the case when user details are not set
    header('HTTP/1.1 401 Unauthorized');
    echo json_encode(['error' => 'User details not found']);
}
?>
