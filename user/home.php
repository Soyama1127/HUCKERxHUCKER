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
    <title>ホーム画面</title>
</head>

<body>
    <header class="home_header">
        <div class="home_logo">
            <img src="./../img/GAMESoya.PNG">
        </div>
        <div class="right_section">
            <a href="cart.php" class="home_button">
                <img src="./../img/cart.png" alt="Cart">
            </a>
            <a href="search.php" class="home_button">
                <img src="./../img/serch.png" alt="Search">
            </a>
            <form action='account.php' method="post" class='user_icon_form'>
                <?php if (isset($_SESSION['user_name'])): ?>
                    <button type="submit" class="user_icon"><?= $_SESSION['user_name'] ?></button>
                <?php else: ?>
                    <button type="button" class="user_icon" onclick="confirmLogin()">ゲスト</button>
                <?php endif; ?>
            </form>
        </div>
    </header>
    <div class="carousel">
        <div id="items-wrapper">
            <img class="active" src="./../img/gamesoya home pic.png">
            <img src="./../img/bigsale.png">
            <img src="./../img/PR.png">
        </div>

        <div id="select-tabs">
            <button class="active" onclick="changeToSelectItem(0)"></button>
            <button onclick="changeToSelectItem(1)"></button>
            <button onclick="changeToSelectItem(2)"></button>
        </div>
    </div>
    <fieldset class="home_fieldset">
        <legend>RPG</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "RPG" and game_stock > 0 limit 4 ');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>アクション</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "アクション" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>アドベンチャー</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "アドベンチャー" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>シュミレーション</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "シュミレーション" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>格闘</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "格闘" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>音楽(リズム)</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "音楽" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset>
    <fieldset class="home_fieldset">
        <legend>その他</legend>
        <div class="game_box">
            <?php
            $sql = $pdo->query('select * from game where game_genre = "その他" and game_stock > 0 limit 4');
            foreach ($sql as $row): ?>
                <div class="game_card">
                    <img src="./../manager/game/<?= $row['game_icon'] ?>" class="game_icon">
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
                        <button type="submit" class="detail_btn" onclick="updateGameBackNumber(0)">詳細</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </fieldset><br><br>
    <script src="./../js/user.js"></script>
</body>

</html>