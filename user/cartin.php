<?php
session_start();
$game_id = $_POST['game_id'];
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$sql = $pdo->prepare('insert into cart(cart_id, game_id) values(?,?)');
$sql->execute([$_SESSION['cart_id'], $game_id]);
header("Location: home.php");
?>