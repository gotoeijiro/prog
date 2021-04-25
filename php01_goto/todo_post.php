<?PHP
// var_dump($_POST);
// exit();

$todo=$_POST['todo'];
$deadline=$_POST['deadline'];

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo登録画面（POST）</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <form action="todo_post_confirm.php" method="POST">
    <fieldset>
      <legend>珈琲の味の好みアンケート（POST）</legend>
      <div>
        酸味・苦味: <input type="text" name='todo'>
      </div>
      <div>
        登録日: <input type="date" name='deadline'>
      </div>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>
</body>

</html>