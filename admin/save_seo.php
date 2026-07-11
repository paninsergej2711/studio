<?php
require_once __DIR__ . '/../config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$key   = trim($input['page_key'] ?? '');
$title = trim($input['seo_title'] ?? '');
$desc  = trim($input['seo_description'] ?? '');

if ($key === '') {
    http_response_code(400);
    echo json_encode(['error' => 'page_key required']);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO seo_meta (page_key, seo_title, seo_description) VALUES (:k, :t, :d) ON DUPLICATE KEY UPDATE seo_title = :t2, seo_description = :d2");
$stmt->execute(['k' => $key, 't' => $title, 'd' => $desc, 't2' => $title, 'd2' => $desc]);

echo json_encode(['success' => true]);
