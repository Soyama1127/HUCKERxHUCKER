<?php

$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$manager_id = $_POST['manager_id'];
$manager_pass = $_POST['manager_pass'];

$sql = $pdo->prepare("select manager_password from manager where manager_id = ?");
$sql->execute([$manager_id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);

if ($row && password_verify($manager_pass, $row['manager_password'])) {
    echo "true";
} else {
    echo "false";
}

$pdo = null;

?>