<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫一覧</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='game_stock.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main class="gameadd_main">
        <div class="gamestock_container">
            <div class="login_h1">
                <h1>在庫補充</h1>
            </div>
            <?php

            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $game_id = $_POST['game_id'];
            $sql = $pdo->prepare('select * from game where game_id = ?');
            $sql->execute([$game_id]);
            foreach ($sql as $row): ?>
                <div class="game_stock_container">
                    <div class="game_stock_detail">
                        <img src='game/<?= $row['game_icon'] ?>' alt='ゲームアイコン' class='game_stock_icon'><br>
                        <?= $row['game_name'] ?>
                        <p>現在の在庫数：<?= $row['game_stock'] ?></p>
                        <form action=game_stock_add_complete method='post' class="game_stock_btn">
                            <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                            <p><input type=number name=add value=1>個補充</p>
                            <input type=submit value="補充する" class="manager_btn"><br>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>