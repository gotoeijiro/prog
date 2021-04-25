<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>味わい記録（入力画面）</title>
</head>

<body>
  <form action="todo_create.php"method="POST">
    <fieldset>
      <legend>味わい記録（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        味わい: <input type="text" name="todo">
      </div>
      <div>
        飲んだ日: <input type="date" name="deadline">
      </div>
      <div>
        <button>記録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>