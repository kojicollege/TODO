<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>TODOアプリ</title>
</head>

<body>
  <h1>TODOリスト</h1>

  <form action="/add" method="POST">
    <input type="text" name="task" placeholder="やることを入力" required>
    <button type="submit">追加</button>
  </form>

  <h2>やること一覧</h2>
  <ul>
    <?php foreach ($todos as $todo): ?>
    <li>
      <?= htmlspecialchars($todo['task'], ENT_QUOTES, 'UTF-8') ?>
      <!-- 完了トグルボタン -->
      <form action="/complete" method="POST" style="display:inline;">
        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
        <button type="submit">
          <?= $todo['is_completed'] ? '未完了に戻す' : '完了' ?>
        </button>
      </form>

      <!-- 削除ボタン -->
      <form action="/delete" method="POST" style="display:inline;">
        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
        <button type="submit">削除</button>
      </form>
    </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>