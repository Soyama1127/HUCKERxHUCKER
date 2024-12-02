<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$inputPass = $_POST['pass'];

$sql = $pdo->prepare("select user_password from user where user_id = ?");
$sql->execute([$_SESSION['user_id']]);
foreach ($sql as $row) {
    $currentPass = $row['user_password']; 
}

if (password_verify($inputPass, $currentPass)) {
    echo "true";
} else {
    echo "false";
}

$pdo = null;

?>