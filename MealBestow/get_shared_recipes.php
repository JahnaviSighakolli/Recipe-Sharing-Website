<?php
session_start();
include 'db_connection.php';
if (!isset($_SESSION['userId'])) {
    http_response_code(401);
    exit();
}
$receiverId = $_SESSION['userId'];
$sql = "SELECT sr.recipe_name, u.username AS sender_username
        FROM shared_recipes sr
        INNER JOIN users u ON sr.sender_id = u.id
        WHERE sr.receiver_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $receiverId);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
if ($result->num_rows > 0) {
    $sharedRecipes = array();
    while ($row = $result->fetch_assoc()) {
        $sharedRecipes[] = $row;
    }
    echo json_encode($sharedRecipes);
} else {
    echo json_encode([]);
}
$conn->close();
?>