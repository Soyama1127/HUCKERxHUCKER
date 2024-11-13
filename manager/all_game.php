<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>ゲーム一覧</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <h3>更新したい商品の選択</h3>
        <table class="tablesorter">
            <thead>
                <tr>
                    <th>商品ID</th>
                    <th>商品名</th>
                    <th>ジャンル</th>
                    <th>機種</th>
                    <th>在庫数</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
                $sql = $pdo->query('select * from game');
                $sql->execute();
                foreach ($sql as $row): ?>
                    <tr>
                        <form action='game_update.php' method='post'>
                            <td> <?= $row['game_id'] ?></td>
                            <td> <?= $row['game_name'] ?> </td>
                            <td> <?= $row['game_genre'] ?> </td>
                            <td> <?= $row['game_model'] ?></td>
                            <td> <?= $row['game_stock'] ?> </td>
                            <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                            <td><button type='submit'>選択</button></td>
                        </form>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>

</html>