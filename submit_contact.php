<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Метод не разрешён']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Имя и сообщение обязательны']);
    exit;
}

$stmt = $pdo->prepare("
    INSERT INTO contact_messages (name, phone, email, message, ip_address)
    VALUES (:name, :phone, :email, :message, :ip)
");
$stmt->execute([
    'name'    => $name,
    'phone'   => $phone,
    'email'   => $email,
    'message' => $message,
    'ip'      => $_SERVER['REMOTE_ADDR'] ?? null,
]);

echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]);
