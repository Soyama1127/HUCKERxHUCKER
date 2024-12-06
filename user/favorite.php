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
    <title>お気に入り</title>
</head>

<body>
    <header class='logoback_header'>
        <button class='back-btn' onclick="location.href='account.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <main class="favorite_main">
        <div class="favorite_container">
            <?php
            $sql = $pdo->prepare('select * from favorite inner join game on favorite.game_id = game.game_id where user_id = ?');
            $sql->execute([$_SESSION['user_id']]);
            $row_count = $sql->rowCount();
            if (!$row_count) {
                echo '<h1>お気に入り登録されている商品はありません。</h1>';
            }
            foreach ($sql as $row): ?>
                <div class="favorite_card">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(2)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>