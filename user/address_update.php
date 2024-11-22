<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$last_namekana = $_POST['last_namekana'];
$first_namekana = $_POST['first_namekana'];
$post_code = $_POST['post_code'];
$state = $_POST['state'];
$city = $_POST['city'];
$house_number = $_POST['house_number'];
$house = $_POST['house'];
$sql = $pdo->prepare('UPDATE `user` SET `last_name` = ?, `first_name` = ?, `last_namekana` = ?, `first_namekana` = ?, `post_code` = ?, `state` = ?, `city` = ?, `house_number` = ?, `house` = ? WHERE `user`.`user_id` = ?;');
$sql->execute([$last_name, $first_name, $last_namekana, $first_namekana, $post_code, $state, $city, $house_number, $house, $_SESSION['user_id']]);
header("Location: account_setting.php");
