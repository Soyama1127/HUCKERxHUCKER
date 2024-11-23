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
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>カート</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <br>
    <h1 class="login_label">カート一覧</h1>
    <div class="cart_container">
        <?php
        $sql = $pdo->prepare('select game.game_id, game.game_icon, game.game_name, game.game_model, game.game_price, cart.cart_game_no from game inner join cart on game.game_id = cart.game_id where cart.cart_id = ?');
        $sql->execute([$cart_id]);
        $row_count = $sql->rowCount();
        foreach ($sql as $row): ?>
            <div class="cart_game">
                <div class="container">
                    <div class='col-12 col-md-12'>
                        <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                            <form action="delete_cart.php" method="post" onsubmit="return confirmCartOut()">
                                <input type='hidden' name='cart_game_no' value='<?= $row['cart_game_no'] ?>'>
                                <button type="submit" class="gomi_icon">
                                    <img src="./../img/gomi.png">
                                </button>
                            </form>
                            <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                            <div class='card-body p-0 w-100'>
                                <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                                <p class='game_model'><?= $row['game_model'] ?></p>
                                <p class='card-text'>￥<?= $row['game_price'] ?></p>
                            </div>
                            <form action='game.php' method='post' class="cart_game_summary">
                                <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                                <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(5)">
                            </form>
                            <form></form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if ($row_count > 0) : ?>
        <form action="buy.php" method="post">
            <input type="submit" value="レジに進む" class="to_buy" onclick="updateNumber(5)">
        </form>
    <?php else : ?>
        <h1 class="cart_label">カートに商品がありません</h1>
    <?php endif; ?>
    <script src="./../js/user.js"></script>
</body>

</html>