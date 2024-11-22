<?php
session_start();

$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$cart_game_no = $_POST['cart_game_no'];
$sql = $pdo->prepare('delete from cart WHERE cart_no = ? and cart_game_no = ?');
$sql->execute([$_SESSION['user_id'],$cart_game_no]);

$sql = $pdo->prepare('update cart set cart_game_no = cart_game_no + 1000 where cart_no = ?');
$sql->execute([$_SESSION['user_id']]);

$sql = $pdo->prepare('set @row_number = 0; update cart set cart_game_no = (@row_number := @row_number + 1) where cart_no = ? order by cart_game_no');
$sql->execute([$_SESSION['user_id']]);

header("Location: cart.php");
?>