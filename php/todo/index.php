<?php
require_once __DIR__ . '/../db/db.php';

// DBからTODOを全件取得
$stmt = $pdo->query("SELECT * FROM todos ORDER BY created_at DESC");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ビューに渡す
require_once __DIR__ . '/../views/todo.php';