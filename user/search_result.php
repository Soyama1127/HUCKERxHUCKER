<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
if(trim($_POST['game_name'])){
    $_SESSION['game_name'] = $_POST['game_name'];
}
if(isset($_POST['game_model'])){
    $_SESSION['game_model'] = $_POST['game_model'];
}

if(isset($_POST['game_genre'])){
    $_SESSION['game_genre'] = $_POST['game_genre'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <title>検索結果</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='search.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <?php
        $search = 'select * from game';
        if (isset($_SESSION['game_name'])) {
            $game_name = $_SESSION['game_name'];
            $search .= ' where game_name like ?';
            if (isset($_SESSION['game_model'])) {
                $game_model = $_SESSION['game_model'];
                $search .= ' and game_model = ?';
                if (isset($_SESSION['game_genre'])) {
                    $game_genre = $_SESSION['game_genre'];
                    $search .= ' and game_genre = ?';
                    $sql = $pdo->prepare($search);
                    $sql->execute(['%' . $game_name . '%', $game_model, $game_genre]);
                } else {
                    $sql = $pdo->prepare($search);
                    $sql->execute(['%' . $game_name . '%', $game_model]);
                }
            } else {
                if (isset($_SESSION['game_genre'])) {
                    $game_genre = $_SESSION['game_genre'];
                    $search .= ' and game_genre = ?';
                    $sql = $pdo->prepare($search);
                    $sql->execute(['%' . $game_name . '%', $game_genre]);
                } else {
                    $sql = $pdo->prepare($search);
                    $sql->execute(['%' . $game_name . '%']);
                }
            }
        } else {
            if (isset($_SESSION['game_model'])) {
                $game_model = $_SESSION['game_model'];
                $search .= ' where game_model = ?';
                if (isset($_SESSION['game_genre'])) {
                    $game_genre = $_SESSION['game_genre'];
                    $search .= ' and game_genre = ?';
                    $sql = $pdo->prepare($search);
                    $sql->execute([$game_model, $game_genre]);
                } else {
                    $sql = $pdo->prepare($search);
                    $sql->execute([$game_model]);
                }
            } else {
                if (isset($_SESSION['game_genre'])) {
                    $game_genre = $_SESSION['game_genre'];
                    $search .= ' where game_genre = ?';
                    $sql = $pdo->prepare($search);
                    $sql->execute([$game_genre]);
                } else {
                    $sql = $pdo->prepare($search);
                    $sql->execute();
                }
            }
        }
        echo '検索ワード';
        echo '<br>';
        echo $game_name;
        echo '<br>';
        echo '選択された機種：';
        echo '<br>';
        echo $game_model;
        echo '<br>';
        echo '選択されたジャンル：';
        echo '<br>';
        echo $game_genre;
        echo '<br>';
        foreach ($sql as $row): ?>
            <div class='col-12 col-md-6'>
                <div class='card w-100 h-50 d-flex flex-row align-items-center p-2'>
                    <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_img'>
                    <div class='card-body p-0 w-100'>
                        <h6 class='card-title mb-2'><?= $row['game_name'] ?></h6>
                        <p class='game_model'><?= $row['game_model'] ?></p>
                        <p class='game_genre'><?= $row['game_genre'] ?></p>
                        <p class='card-text'>￥<?= $row['game_price'] ?></p>
                    </div>
                    <form action='game.php' method='post'>
                        <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                        <input type='submit' value='詳細' class='btn btn-primary' onclick="updateGameBackNumber(4)">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>