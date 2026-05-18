<?php
session_start();
require 'conn.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit();
}

$user_id        = $_SESSION['user_id'];
$destination_id = intval($_POST['destination_id'] ?? 0);

if ($destination_id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid destination']);
    exit();
}

// Check if already in favorites
$stmt = $conn->prepare("SELECT favourite_id FROM favorites WHERE user_id = ? AND destination_id = ?");
$stmt->bind_param("ii", $user_id, $destination_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'Already in wishlist']);
    $stmt->close();
    exit();
}
$stmt->close();

// Insert into favorites
$stmt = $conn->prepare("INSERT INTO favorites (user_id, destination_id) VALUES (?, ?)");
$stmt->bind_param("ii", $user_id, $destination_id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Added to wishlist!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to add']);
}
$stmt->close();
?>