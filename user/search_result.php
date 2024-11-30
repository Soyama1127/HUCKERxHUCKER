<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
if (trim($_POST['game_name'])) {
    $_SESSION['game_name'] = $_POST['game_name'];
}
if (isset($_POST['game_model'])) {
    $_SESSION['game_model'] = $_POST['game_model'];
}

if (isset($_POST['game_genre'])) {
    $_SESSION['game_genre'] = $_POST['game_genre'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>検索結果</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='search.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="search_result_main">
        <div class="search_result_container">
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
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute(['%' . $game_name . '%', $game_model, $game_genre]);
                    } else {
                        $game_genre = 'なし';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute(['%' . $game_name . '%', $game_model]);
                    }
                } else {
                    $game_model = 'なし';
                    if (isset($_SESSION['game_genre'])) {
                        $game_genre = $_SESSION['game_genre'];
                        $search .= ' and game_genre = ?';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute(['%' . $game_name . '%', $game_genre]);
                    } else {
                        $game_genre = 'なし';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute(['%' . $game_name . '%']);
                    }
                }
            } else {
                $game_name = 'なし';
                if (isset($_SESSION['game_model'])) {
                    $game_model = $_SESSION['game_model'];
                    $search .= ' where game_model = ?';
                    if (isset($_SESSION['game_genre'])) {
                        $game_genre = $_SESSION['game_genre'];
                        $search .= ' and game_genre = ?';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute([$game_model, $game_genre]);
                    } else {
                        $game_genre = 'なし';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute([$game_model]);
                    }
                } else {
                    $game_model = 'なし';
                    if (isset($_SESSION['game_genre'])) {
                        $game_genre = $_SESSION['game_genre'];
                        $search .= ' where game_genre = ?';
                        $sql = $pdo->prepare($search.' and game_stock > 0');
                        $sql->execute([$game_genre]);
                    } else {
                        $game_genre = 'なし';
                        $sql = $pdo->prepare($search.' where game_stock > 0');
                        $sql->execute();
                    }
                }
            }
            $row_count = $sql->rowCount();
            echo '<div class="game_search">';
            echo '検索ワード：', $game_name, '<br>';
            echo '選択された機種：', $game_model, '<br>';
            echo '選択されたジャンル：', $game_genre, '<br>';
            echo '</div>';
            if(!$row_count){
                echo '<div class="notfound">';
                echo '<h1>条件に一致するゲームが見つかりませんでした。</h1>';
                echo '</div>';
            }
            foreach ($sql as $row): ?>
                <div class='search_card'>
                    <img src='./../manager/game/<?= $row['game_icon'] ?>' alt='ゲーム画像' class='game_icon'>
                    <div class='search_game_title'>
                        <h3 class="search_h3"><?= $row['game_name'] ?></h3>
                        <div class="search_game_detail">
                            <h4>機種：<?= $row['game_model'] ?></h4>
                            <h4>ジャンル:<?= $row['game_genre'] ?></h4>
                            <h4>￥<?= $row['game_price'] ?></h4>
                        </div>
                    </div>
                    <form action='game.php' method='post' class="search_detail_form">
                        <input type='hidden' name='game_id' value='<?= $row['game_id'] ?>'>
                        <input type='submit' value='詳細' class='search_detail_btn' onclick="updateGameBackNumber(4)">
                    </form>
                </div>
            <?php endforeach; ?>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>