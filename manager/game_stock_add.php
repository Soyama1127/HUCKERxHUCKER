<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫一覧</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <h1>在庫補充</h1>
        <br>
        <br>
        <br>
        <?php

        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $game_id = $_POST['game_id'];
        $sql = $pdo->prepare('select * from game where game_id = ?');
        $sql->execute([$game_id]);
        foreach ($sql as $row): ?>
            <img src='game/<?=$row['game_icon']?>' alt='ゲームアイコン' class='game_img'>
            <?= $row['game_name'] ?>
            <p>現在の在庫数：<?=$row['game_stock']?></p>
            <form action=game_stock_add_complete method='post'>
                <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                <p><input type=number name=add value=1>個補充</p>
                <input type=submit value="補充する" class="manager_button"><br>
            </form>
        <?php endforeach ?>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>