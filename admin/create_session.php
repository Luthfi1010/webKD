<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['uid']) && isset($data['email'])) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_uid'] = $data['uid'];
    $_SESSION['admin_email'] = $data['email'];
    echo json_encode(['success' => true]);
} else {
    http_response_code(400);
    echo json_encode(['success' => false]);
}
?>