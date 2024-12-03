<?php
session_start();
$game_id = $_POST['game_id'];
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
$sql = $pdo->prepare('select * from cart where cart_no =?');
$sql->execute([$_SESSION['user_id']]);
$row_count = $sql->rowCount() + 1;
$sql = $pdo->prepare('insert into cart(cart_no, cart_game_no, game_id) values(?,?,?)');
$sql->execute([$_SESSION['user_id'], $row_count, $game_id]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ゲーム追加処理</title>
    <script type="text/javascript" src="./../user/user.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            gameBack();
        };
    </script>
</head>

<body>
    <script src="./../js/user.js"></script>
</body>

</html>