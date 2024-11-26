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
    <title>ホーム画面</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <img class="navbar-brand" src='./../img/GAMESoya.PNG' style="width: 30vw;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">
                            <img src="./../img/cart.png" alt="Cart">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">
                            <img src="./../img/serch.png" alt="Search">
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action='account.php' method="post" class='user_icon_form'>
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <button type="submit" class="user_icon"><?= $_SESSION['user_name'] ?></button>
                            <?php else: ?>
                                <button type="button" class="user_icon" onclick="confirmLogin()">ゲスト</button>
                            <?php endif; ?>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gameSoya Black.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
            </div>
            </button>
        </div>
    </div>
    <div class="container">
        <fieldset class="row mt-5 ">
            <legend>RPG</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "RPG" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateGameBackNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>アクション</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "アクション" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>アドベンチャー</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "アドベンチャー" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>シュミレーション</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "シュミレーション" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>格闘</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "格闘" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>音楽(リズム)</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "音楽" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
        <fieldset class="row mt-5 ">
            <legend>その他</legend>
            <?php
            $sql = $pdo->prepare('select * from game where game_genre = "その他" limit 4');
            $sql->execute();
            foreach ($sql as $row): ?>
                <div class='col-12 col-md-6'>
                    <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                        <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                        <div class='card-body p-0 w-100'>
                            <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                            <p class='game_model'><?= $row['game_model'] ?></p>
                            <p class='card-text'>￥<?= $row['game_price'] ?></p>
                        </div>
                        <form action='game.php' method='post'>
                            <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                            <input type='submit' value='詳細' class='btn btn-primary' onclick="updateNumber(0)">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </fieldset>
    </div>
    <footer>
        トップページへ
    </footer>
    <script src="./../js/user.js"></script>
</body>

</html>