<?php
require 'conn.php';
$id = intval($_GET['id'] ?? 0);
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM review WHERE review_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header("Location: admin-feedback.php");
exit;
?>