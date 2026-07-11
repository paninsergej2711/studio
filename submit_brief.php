<?php
require_once __DIR__ . '/config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Метод не разрешён']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    http_response_code(400);
    echo json_encode(['error' => 'Некорректные данные']);
    exit;
}

// Main brief (from homepage) — потоки используют стандартные поля, добавляем контекст услуги
if (($input['brief_type'] ?? '') === 'main') {
    $service  = $input['service'] ?? '';
    $siteType = $input['site_type'] ?? '';

    $ctxParts = ['Заявка с главной'];
    if ($service !== '')  $ctxParts[] = 'Услуга: ' . $service;
    if ($siteType !== '') $ctxParts[] = 'Тип: ' . $siteType;
    foreach (['crm_tasks' => 'Задачи CRM', 'crm_users' => 'Пользователей', 'other_desc' => 'Описание'] as $k => $lbl) {
        if (!empty($input[$k])) $ctxParts[] = $lbl . ': ' . $input[$k];
    }
    $ctx = implode('. ', $ctxParts);
    $input['comment'] = $ctx . (!empty($input['comment']) ? '. Комментарий: ' . $input['comment'] : '');

    if (empty($input['theme'])) {
        $input['theme'] = $siteType !== '' ? $siteType : ($service !== '' ? $service : null);
    }
    // Далее выполняется общий INSERT ниже
}

$stmt = $pdo->prepare("
    INSERT INTO brief_submissions
    (theme, theme_other, budget, deadline, design, designs_refs, functionalities, integrations, pages_count, products_count, cms, name, phone, email, comment, ip_address)
    VALUES
    (:theme, :theme_other, :budget, :deadline, :design, :designs_refs, :functionalities, :integrations, :pages_count, :products_count, :cms, :name, :phone, :email, :comment, :ip)
");

$func = $input['func'] ?? [];
if (is_string($func)) $func = [$func];
$intg = $input['integrations'] ?? [];
if (is_string($intg)) $intg = [$intg];

$stmt->execute([
    'theme'           => $input['theme'] ?? null,
    'theme_other'     => $input['themeOther'] ?? null,
    'budget'          => $input['budget'] ?? null,
    'deadline'        => $input['deadline'] ?? null,
    'design'          => $input['design'] ?? null,
    'designs_refs'    => $input['references'] ?? null,
    'functionalities' => !empty($func) ? json_encode($func, JSON_UNESCAPED_UNICODE) : null,
    'integrations'    => !empty($intg) ? json_encode($intg, JSON_UNESCAPED_UNICODE) : null,
    'pages_count'     => $input['pagesCount'] ?? null,
    'products_count'  => $input['productsCount'] ?? null,
    'cms'             => $input['cms'] ?? null,
    'name'            => $input['name'] ?? null,
    'phone'           => $input['phone'] ?? null,
    'email'           => $input['email'] ?? null,
    'comment'         => $input['comment'] ?? null,
    'ip'              => $_SERVER['REMOTE_ADDR'] ?? null,
]);

echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]);
