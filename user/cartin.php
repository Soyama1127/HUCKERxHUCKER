<?php
session_start();
$game_id = $_POST['game_id'];
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$sql = $pdo->prepare('select * from cart where cart_id =?');
$sql->execute([$_SESSION['user_id']]);
$row_count = $sql->rowCount()+1;
$sql = $pdo->prepare('insert into cart(cart_no, cart_game_no, game_id, cart_id) values(?,?,?,?)');
$sql->execute([$_SESSION['user_id'],$row_count, $game_id, $_SESSION['user_id']]);
header("Location: home.php");
?>