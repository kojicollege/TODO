<?php
require_once __DIR__ . '/../db/db.php';

$stmt = $pdo->query("SELECT * FROM todos ORDER BY due_date IS NULL, due_date ASC, created_at DESC");
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../views/todo.php';