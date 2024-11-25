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
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>購入履歴</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='account.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <br><br>
    <h1 class="login_label">購入履歴</h1>
    <div class="buyhistory_container">
        <?php
        $sql = $pdo->prepare('select * from game inner join bought on game.game_id = bought.game_id where user_id = ? order by buy_date');
        $sql->execute([$_SESSION['user_id']]);
        foreach ($sql as $row): ?>
            <div class="cart_game">
                <div class="container">
                    <div class='col-12 col-md-12'>
                        <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                            <form></form>
                            <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                            <div class='card-body p-0 w-100'>
                                <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                                <h5 class='card-title mb-2'><?= $row['buy_date'] ?></h5>
                            </div>
                            <form action='game.php' method='post'>
                                <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                                <input type='submit' value='詳細' class='btn btn-primary' onclick="updateGameBackNumber(1)">
                            </form>
                            <form></form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="./../js/user.js"></script>
</body>

</html>