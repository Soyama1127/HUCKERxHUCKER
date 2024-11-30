<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>購入履歴</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='account.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <br><br>
    <h1 class="login_label">購入履歴</h1>
    <div class="cart_box">
        <?php
        $sql = $pdo->prepare('select * from game inner join bought on game.game_id = bought.game_id where user_id = ? order by buy_date desc');
        $sql->execute([$_SESSION['user_id']]);
        foreach ($sql as $row): ?>
            <div class="cart_card">
                <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_icon'>
                <div class="game_title">
                    <div>
                        <h5><?= $row['game_name'] ?></h5>
                        <h3><?= $row['buy_date'] ?></h3>
                    </div>
                </div>
                <form action="game.php" method="post" class="detail_form">
                    <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                    <button type="submit" class="detail_btn" onclick="updateGameBackNumber(1)">詳細</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="./../js/user.js"></script>
</body>

</html>