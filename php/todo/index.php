<?php
session_start();

// 初回アクセス時に初期化
if (!isset($_SESSION['todos'])) {
  $_SESSION['todos'] = [];
}

// セッションからTODOを取得
$todos = $_SESSION['todos'];

// ビューを表示
require_once __DIR__ . '/../views/todo.php';