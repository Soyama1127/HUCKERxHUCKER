<?php
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $pr_id = $_POST['pr_id'];
    $sql = $pdo->prepare('update userpr set pr_approval=0 where pr_id=?' );
    $sql->execute([$pr_id]);
    header("Location: pr_approval.php");
?>