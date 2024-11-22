<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$user_name = $POST['user_name'];
$sql = $pdo->prepare('UPDATE `user` SET `user_name` = ? WHERE `user`.`user_id` = ?;');
$sql->execute([$user_name,$_SESSION['user_id']]);
header("Location: account_setting.php");