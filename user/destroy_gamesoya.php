<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$POST['pr_content'];
$POSR['pr_movie'];
$count=0;
$_SESSION['user_id'];
$_SESSION['game_id'];
$sql = $pdo->prepare("insert into userpr ('pr_id, user_id',game_id,pr_content,pr_clip,) value ('?,?,?,?,?') ");
$sql->execute([$_SESSION['count,user_id,game_id,pr_content,pr_movie']]);
header("Location: pr.php");
?>