<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$user_password = $_POST['user_password'];
$hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);
$sql = $pdo->prepare('UPDATE `user` SET `user_password` = ? WHERE `user`.`user_id` = ?;');
$sql->execute([$hashedPassword,$_SESSION['user_id']]);
header("Location: account_setting.php");