<?php



// DB接続情報
$dbn = 'mysql:dbname=gsacs_d02_02;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
$sql='SELECT * FROM todo_table ORDER BY deadline ASC';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); 
if ($status==false) {
$error = $stmt->errorInfo();
// データ登録失敗次にエラーを表示 
exit('sqlError:'.$error[2]);
} else {
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
  foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td>{$record["deadline"]}</td>";
    $output .= "<td>{$record["todo"]}</td>";
    $output .= "</tr>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>味わい記録リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>味わい記録リスト（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>飲んだ日</th>
          <th>味わい</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>