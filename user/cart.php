<?php
session_start();
$cart_id = $_SESSION['user_id'];
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>カート</title>
</head>

<body>
    <header class="signup_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <h1 class="login_label">カート一覧</h1>
    <div class="cart_box">
        <?php
        $sql = $pdo->prepare('select game.game_id, game.game_icon, game.game_name, game.game_model, game.game_price, cart.cart_game_no from game inner join cart on game.game_id = cart.game_id where cart.cart_no = ?');
        $sql->execute([$cart_id]);
        $row_count = $sql->rowCount();
        foreach ($sql as $row): ?>
            <div class="cart_card">
                <form action="delete_cart.php" method="post" onsubmit="return confirmCartOut()" class="gomi_form">
                    <input type='hidden' name='cart_game_no' value='<?= $row['cart_game_no'] ?>'>
                    <button type="submit" class="gomi_icon">
                        <img src="./../img/gomi.png">
                    </button>
                </form>
                <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_icon'>
                <div class="game_title">
                    <div class="game_title_detail">
                        <h3><?= $row['game_name'] ?></h3>
                        <div class="modelprice">
                            <p><?= $row['game_model'] ?></p>
                            <p>￥<?= $row['game_price'] ?></p>
                        </div>
                    </div>
                </div>
                <form action="game.php" method="post" class="detail_form">
                    <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                    <button type="submit" class="detail_btn" onclick="updateGameBackNumber(3)">詳細</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if ($row_count > 0) : ?>
        <form action="buy.php" method="post" class="cart_buy_form">
            <input type="submit" value="レジに進む" class="cart_buy" name="cart_buy" onclick="updateBuyBackNumber(0)">
        </form>
    <?php else : ?>
        <div class="cart_nogame">
            <h1 class="cart_label">カートに商品がありません</h1>
        </div>
    <?php endif; ?>
    <script src="./../js/user.js"></script>
</body>

</html>