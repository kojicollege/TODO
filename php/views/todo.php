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
    <li><?= htmlspecialchars($todo, ENT_QUOTES, 'UTF-8') ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>