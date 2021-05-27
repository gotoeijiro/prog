<?php
// var_dump($_FILES);
// exit();



if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile']['name']; //ファイル名の取得 
  $temp_path = $_FILES['upfile']['tmp_name']; //tmpフォルダの場所 
  $directory_path = 'upload/';
  //拡張子
  $extension = pathinfo($uploaded_file_name, PATHINFO_EXTENSION); 
  //名前をつける
  $unique_name = date('YmdHis').md5(session_id()) . "." . $extension;
  //保存場所と場所
  $filename_to_save = $directory_path . $unique_name;
  // var_dump($filename_to_save);
  // exit();


  $img='';
  //一時保管場所にファイルがあるかどうかチェック
  if (is_uploaded_file($temp_path)) {
  // ファイルの保管がうまくいったかどうかチェック
  if (move_uploaded_file($temp_path, $filename_to_save)) {
  chmod($filename_to_save, 0644); // 権限の変更
  $img = '<img src="'. $filename_to_save . '" >'; // imgタグを設定 
  } else {
  exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
  }
  } else {
  exit('Error:画像がありません'); // tmpフォルダにデータがない 
}
  
} else {
  // 送られていない，エラーが発生，などの場合
  exit('Error:画像が送信されていません'); 
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>file_upload</title>
</head>

<body>
<?=$img?>

</body>

</html>