<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$user_id = $_POST['user_id'];
$sql = $pdo->prepare('UPDATE `user` SET `user_id` = ? WHERE `user`.`user_id` = ?;');
$sql->execute([$user_id,$_SESSION['user_id']]);
"alert('ログインIDを登録しました')";
header("Location: account_setting.php");