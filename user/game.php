<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');

if (isset($_POST['game_id'])) {
    $_SESSION['game_id'] = $_POST['game_id'];
}

$sql = $pdo->prepare('select * from favorite where user_id = ? and game_id = ?');
$sql->execute([$_SESSION['user_id'], $_SESSION['game_id']]);
$favorite_num = $sql->rowCount();
$favorite = $sql->rowCount() > 0;

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ゲーム詳細</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="gameBack()"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="game_main">
        <?php
        $game_id = $_SESSION['game_id'];
        $sql = $pdo->prepare('select * from game where game_id = ?');
        $sql->execute([$game_id]);
        foreach ($sql as $row): ?>
            <div class="game_detail_img">
                <!-- 画像表示部分 -->
                <div id="items-wrapper">
                    <img class="active" src='./../manager/game/<?= $row['game_sample1'] ?>' alt="ゲーム画像">
                    <img src='./../manager/game/<?= $row['game_sample2'] ?>'>
                    <img src='./../manager/game/<?= $row['game_sample3'] ?>'>
                </div>

                <!-- 画像をタブで切り替えるボタン -->
                <div id="select-tabs">
                    <button class="active" onclick="changeToSelectItem(0)"></button>
                    <button onclick="changeToSelectItem(1)"></button>
                    <button onclick="changeToSelectItem(2)"></button>
                </div>

                <!-- 隣の画像に移動するボタン -->
                <div id="change-buttons">
                    <button onclick="changeToPrevItem()"></button>
                    <button onclick="changeToNextItem()"></button>
                </div>
            </div>
            <div class="game_icon_card">
                <div class="game_detail">
                    <div class="game_detail_icon">
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲームアイコン' class='game_icon'>
                    </div>
                    <div>
                        <h3><?= $row['game_name'] ?></h3>
                        <h3>￥<?= $row['game_price'] ?></h3>
                    </div>
                    <?php if(isset($_SESSION['user_name'])): ?>
                    <div class="favorite_btn_area">
                        <button class="favorite_btn <?php echo $favorite ? 'favorite' : 'not_favorite'; ?>" onclick="Favorite(<?=$favorite_num?>);">
                            <?php echo $favorite ? 'お気に入り済み' : 'お気に入り'; ?>
                        </button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <hr class="game_hr">
            <div class="game_info">
                <div class="genmode">
                    <div class="game_genre">
                        <h2>ジャンル</h2>
                        <h2><?= $row['game_genre'] ?></h2>
                    </div>
                    <div class="game_model">
                        <h2>機種</h2>
                        <h2><?= $row['game_model'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="summary_box">
                <fieldset class="game_summary">
                    <?= $row['game_summary'] ?>
                </fieldset>
            </div>
            <div class="game_btn_area">
                <div class="game_btn">
                    <form action="cartin.php" method="post" onsubmit="return cartin();">
                        <input type="hidden" name="game_id" value="<?= $row['game_id'] ?>">
                        <input type="submit" value="カートに入れる" class='cartin_btn'><br>
                    </form>
                    <form action='buy.php' method="post">
                        <input type="hidden" name="game_id" value="<?= $row['game_id'] ?>">
                        <input type="submit" name='only_buy' value="購入" class='cartin_btn' onclick="updateBuyBackNumber(1)"><br>
                    </form>
                    <form action="pr.php" method="post">
                        <input type="submit" value="ユーザーPR" class='userpr_btn'>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>