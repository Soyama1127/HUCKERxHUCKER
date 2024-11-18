<?php
session_start();
$cart_id = $_SESSION['cart_id'];
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
        <button class='back-btn' onclick="location.href='home.php'">＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <?php
        $sql = $pdo->prepare('select game.game_id, game.game_icon, game.game_name, game.game_model, game.game_price from game inner join cart on game.game_id = cart.game_id where cart.cart_id = ?');
        $sql->execute([$cart_id]);
        foreach ($sql as $row): ?>
            <div class='col-6 col-md-6'>
                <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                    <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                    <div class='card-body p-0 w-100'>
                        <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                        <p class='game_model'><?= $row['game_model'] ?></p>
                        <p class='card-text'>￥<?= $row['game_price'] ?></p>
                    </div>
                    <form action='game.php' method='post'>
                        <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                        <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(3)">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>