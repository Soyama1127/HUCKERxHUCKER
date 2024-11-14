<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$login_id = $_POST['user_id'];
$login_pass = $_POST['user_pass'];

$sql = $pdo->prepare("select user_name, user_password from user where login_id = ?");
$sql->execute([$login_id]);
foreach ($sql as $row) {
    $name = $row['user_name'];
    $pass = $row['user_password'];
}

if ($pass && password_verify($login_pass, $pass)) {
    $_SESSION['user_name'] = $name;
    echo "true";
} else {
    echo "false";
}

$pdo = null;

?>