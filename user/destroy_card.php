<?php
    session_start();
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $card_id=$_POST['card_id'];
    $card_month=$_POST['card_month'];
    $card_year=$_POST['card_year'];
    $card_text=$_POST['card_text'];
    $security=$_POST['security'];
    $user_id=$_SESSION['cart_id'] ;
    $sql = $pdo->prepare("UPDATE `creditcard` SET `card_number` = ?, `date_mounth` = ?, `date_year` = ?, `card_name` = ?, `seurity_card` = ? WHERE `creditcard`.`user_id` = ?;
 ");
    $sql->execute([$card_id,$card_month,$card_year,$card_text,$security,$user_id]);
    header("Location: account_setting.php");
?>