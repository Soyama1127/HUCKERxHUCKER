<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

$login_id = $_POST['user_id'];
$login_pass = $_POST['user_pass'];

$sql = $pdo->prepare("select user_id, user_name, user_password from user where user_id = ?");
$sql->execute([$login_id]);
foreach ($sql as $row) {
    $id = $row['user_id'];
    $name = $row['user_name'];
    $pass = $row['user_password'];
}

if ($pass && password_verify($login_pass, $pass)) {
    $_SESSION['user_name'] = $name;
    $_SESSION['user_id'] = $id;
    echo "true";
} else {
    echo "false";
}

$pdo = null;

?>