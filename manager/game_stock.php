<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>在庫管理</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <table id="stockTable" class="tablesorter">
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

                // データベース接続設定
                $pdo = new PDO(
                    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;',
                    'LAA1553864',
                    'Pass1127'
                );
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // クエリを実行し、結果をテーブル行として出力

                foreach ($pdo->query('SELECT * FROM game') as $row) : ?>
                    <tr>
                        <td><?= $row['game_id'] ?></td>
                        <td> <?= $row['game_name'] ?> </td>
                        <td> <?= $row['game_genre']?> </td>
                        <td> <?=$row['game_model'] ?></td>
                        <td> <?=$row['game_stock'] ?> </td>
                        <form action='game_stock_add.php' method='post'>
                        <input type='hidden' name=game_id value=<?=$row['game_id']?>>
                        <td><button>補充</button></td>
                    </tr>
                <?php endforeach ?>



            </tbody>
        </table>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>