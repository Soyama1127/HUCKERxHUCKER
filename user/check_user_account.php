<?php

$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$user_id = $_POST['user_id'];
$user_pass = $_POST['user_pass'];

$sql = $pdo->prepare("select user_password from user where login_id = ?");
$sql->execute([$user_id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);

if ($row && password_verify($user_pass, $row['user_password'])) {
    echo "true";
} else {
    echo "false";
}

$pdo = null;

?>