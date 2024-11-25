<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$pr_content=$_POST['pr_content'];
$pr_movie-$_POST['pr_movie'];
$user_id=$_SESSION['user_id'];
$game_id=$_SESSION['game_id'];
$sql = $pdo->prepare('insert into userpr (user_id, game_id, pr_content, pr_clip) values (?,?,?,?)');
$sql->execute(['$user_id,$game_id,$pr_content,$pr_movie']);
header("Location: pr.php");
?>