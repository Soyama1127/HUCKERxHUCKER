<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$sql = $pdo->prepare('insert into favorite(user_id, game_id) values(?,?)');
$sql->execute([$_SESSION['user_id'],$_SESSION['game_id']]);
header("Location: game.php");
?>