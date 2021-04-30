<?php

// var_dump($_POST);


session_start();
include('functions.php');
$dbo=connect_to_db();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'SELECT * FROM users_table WHERE username = :username 
AND password = :password
AND is_deleted=0';

$stmt=$dbo->prepare($sql);
$stmt->bindValue(':username',$username,PDO::PARAM_STR);
$stmt->bindValue(':password',$password,PDO::PARAM_STR);
$status = $stmt->execute();
$val = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($val);
// exit();


if(!$val){
    echo "<p>ログイン情報に誤りがあります。</p>";
    echo "<a href='todo_login.php'>戻る</a>";
    exit();
}else{
    $_SESSION = array(); // セッション変数を空にする
 $_SESSION["session_id"] = session_id();
 $_SESSION["is_admin"] = $val["is_admin"];
 $_SESSION["username"] = $val["username"];
 header("Location:todo_read.php"); // 一覧ページへ移動
 exit();
}
