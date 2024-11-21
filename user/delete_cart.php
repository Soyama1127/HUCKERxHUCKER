<?php
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$game_id = $_POST['game_id'];
$sql = $pdo->prepare('delete from cart WHERE cart_no = ? and cart_game_no = ?');
$sql->execute([$_SESSION['user_id'],$game_id]);

header("Location: cart.php");
?>