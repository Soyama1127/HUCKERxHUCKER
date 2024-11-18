<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>商品削除</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <table id="gameTable" class="tablesorter">
    <h1>商品削除</h1>
    <h2>ID</h2>
    <h2>ゲーム一覧</h2>
    <main>
    <h1>商品削除</h1>
    ID<br>
    <input type=text name=game_id><br>
    ゲーム一覧<br>
    <tbody>
    <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = "select * from game";
        foreach ($pdo->query($sql) as $row) : ?>
            <tr>
                <td><?= $row['game_id'] ?></td>
                <td> <?= $row['game_name'] ?> </td>
                <td> <?= $row['game_genre'] ?> </td>
                <td> <?= $row['game_model'] ?></td>
                <td> <?= $row['game_stock'] ?> </td>
            <form action='game_delete_complete.php' method='post'>
                <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
            </form>
            </tr>
        <?php endforeach ?>
            </tbody>
        </table>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>