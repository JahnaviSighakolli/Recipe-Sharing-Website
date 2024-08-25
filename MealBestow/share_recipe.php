<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['userId'])) {
    http_response_code(401);
    exit();
}

// Get raw POST data
$postData = file_get_contents("php://input");
// Decode JSON data
$data = json_decode($postData, true);

if (!$data) {
    // Invalid JSON data
    echo json_encode(['success' => false, 'error' => 'Invalid JSON data']);
    exit();
}

$senderId = $_SESSION['userId'];
$receiverUsername = filter_var($data['receiverUsername'], FILTER_SANITIZE_STRING);
$recipeName = filter_var($data['recipeName'], FILTER_SANITIZE_STRING);

// Validate if the receiver exists
$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $receiverUsername);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

if ($result->num_rows > 0) {
    $receiverRow = $result->fetch_assoc();
    $receiverId = $receiverRow['id'];

    // Share the recipe
    $sql = "INSERT INTO shared_recipes (sender_id, receiver_id, recipe_name) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iis', $senderId, $receiverId, $recipeName);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error sharing recipe: ' . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Receiver not found']);
}

$conn->close();
?>