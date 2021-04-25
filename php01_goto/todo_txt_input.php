<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>珈琲の好みアンケート（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST" >
    <fieldset>
      <legend>珈琲の好みアンケート（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        好み: <input type="text" name="todo">
      </div>
      <div>
        登録日: <input type="date" name="deadline">
      </div>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

</body>

</html>