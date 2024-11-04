<?php

$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$manager_id = $_POST['manager_id'];

$sql = $pdo->prepare("select * from manager where manager_id = ?");
$sql->execute([$manager_id]);
$row_count = $sql->rowCount();

if ($row_count > 0) {
    echo "exists";
} else {
    echo "not_exists";
}

$pdo = null;
?>