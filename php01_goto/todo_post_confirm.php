<?php
//この書き方で短縮できる
// function h($val){
//   return htmlspecialchars($val,ENT_QUOTES);
// }
//<><?=h($todo);
   
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
  <title>珈琲の味の好み結果（POST）</title>
</head>

<body>
  <fieldset>
    <legend>珈琲の味の好み結果（POST）</legend>
    <table>
      <thead>
        <tr>
          <th>好み</th>
          <th>登録日</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?=htmlspecialchars($todo,ENT_QUOTES);?></td>
          <td><?=htmlspecialchars($deadline,ENT_QUOTES);?></td>
          
        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>