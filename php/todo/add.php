<?php
session_start();

$task = $_POST['task'] ?? '';

if (trim($task) !== '') {
    $_SESSION['todos'][] = $task;
}

// 一覧画面に戻る
header('Location: /');
exit;