<?php
session_start();
if (isset($_POST['game_id'])) {
    $_SESSION['game_id'] = $_POST['game_id'];
} 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>ゲーム詳細</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="gameBack()"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <main class='game_main'>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $game_id = $_SESSION['game_id'];
        $sql = $pdo->prepare('select * from game where game_id = ?');
        $sql->execute([$game_id]);
        foreach ($sql as $row): ?>
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src='./../manager/game/<?= $row['game_sample1'] ?>' alt='ゲーム画像' class="d-block w-100 h-50">
                        </div>
                        <div class="carousel-item">
                            <img src='./../manager/game/<?= $row['game_sample2'] ?>' alt='ゲーム画像' class="d-block w-100 h-50">
                        </div>
                        <div class="carousel-item">
                            <img src='./../manager/game/<?= $row['game_sample3'] ?>' alt='ゲーム画像' class="d-block w-100 h-50">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="game-details">
                    <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲームアイコン' class='game_img'>
                    <div>
                        <h4><?= $row['game_name'] ?></h4>
                        <h6>￥<?= $row['game_price'] ?></h6>
                    </div>
                </div>
            </div>
            <hr>
            <div class="game_info">
                ジャンル　　　　<?= $row['game_genre'] ?><br><br>
                機種　　　　　<?= $row['game_model'] ?>
            </div>
            <fieldset>
                <div class="game_summary">
                    <?= $row['game_summary'] ?>
                </div>
            </fieldset>
            <br>
            <form action="cartin.php" method="post" onsubmit="return cartin();">
                <input type="hidden" name="game_id" value="<?= $row['game_id'] ?>">
                <input type="submit" value="カートに入れる" class='cartin_button'><br>
            </form>

            <form action='buy.php' method="post">
                <input type="hidden" name="game_id" value="<?= $row['game_id'] ?>">
                <input type="submit" name='only_buy' value="購入" class='cartin_button' onclick="updateBuyBackNumber(1)"><br>
            </form>
            <form action="pr.php" method="post">
                <input type="hidden" name="game_id" value="<?= $row['game_id'] ?>">
                <input type="submit" value="ユーザーPR" class='userpr_button'>
            </form>

        <?php endforeach; ?>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>