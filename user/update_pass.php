<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$user_password = $_POST['user_password'];
$sql = $pdo->prepare('UPDATE `user` SET `user_password` = ? WHERE `user`.`user_id` = ?;');
$sql->execute([$user_password,$login_id,$_SESSION['user_id']]);
"alert('パスワードを登録しました')";
header("Location: account_setting.php");