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
        <button class='back-btn' onclick='window.history.back();'>＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">

    </header>
    <?php
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $game_id = $_POST['game_id'];
    $sql = $pdo->prepare('select * from game where game_id = ?');
    $sql->execute([$game_id]);
    foreach ($sql as $row): ?>
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src='./../manager/<?= $row['game_sample1'] ?>' alt='ゲーム画像' class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src='./../manager/<?= $row['game_sample2'] ?>' alt='ゲーム画像' class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src='./../manager/<?= $row['game_sample3'] ?>' alt='ゲーム画像' class="d-block w-100">
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
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>