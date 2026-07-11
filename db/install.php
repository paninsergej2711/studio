<?php
require_once __DIR__ . '/../config.php';

try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS brief_submissions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            theme VARCHAR(255) DEFAULT NULL,
            theme_other VARCHAR(255) DEFAULT NULL,
            budget VARCHAR(100) DEFAULT NULL,
            deadline VARCHAR(100) DEFAULT NULL,
            design VARCHAR(100) DEFAULT NULL,
            designs_refs TEXT DEFAULT NULL,
            functionalities TEXT DEFAULT NULL,
            integrations TEXT DEFAULT NULL,
            pages_count VARCHAR(50) DEFAULT NULL,
            products_count VARCHAR(50) DEFAULT NULL,
            cms VARCHAR(100) DEFAULT NULL,
            name VARCHAR(255) DEFAULT NULL,
            phone VARCHAR(50) DEFAULT NULL,
            email VARCHAR(255) DEFAULT NULL,
            comment TEXT DEFAULT NULL,
            ip_address VARCHAR(45) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS contact_messages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            name VARCHAR(255) NOT NULL,
            phone VARCHAR(50) DEFAULT NULL,
            email VARCHAR(255) DEFAULT NULL,
            message TEXT NOT NULL,
            ip_address VARCHAR(45) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");

    echo "База данных успешно настроена! Таблицы созданы.";
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}
