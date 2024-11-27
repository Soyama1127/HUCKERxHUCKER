<?php
    session_start();
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $sql = $pdo->prepare('update userpr set approval=0 where game_id=?' );
    $sql->execute([$_SESSION['game_id']]);
    header("Location: pr_approval.php");
?>