<?php
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>購入履歴</title>
</head>

<body>
    <header>
        <header class="logoback_header">
            <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
            GAMESoya管理者
        </header>
        <main class="game_choose_main">
            <div class="game_choose_container">
                <?php
                $sql = $pdo->query('select sum(game_price) as game_price from bought inner join game on bought.game_id = game.game_id');
                $price = $sql->fetch();
                ?>
                <h1>総利益: <?= $price['game_price'] ?></h1>
                <table class="salestable">
                    <thead>
                        <tr>
                            <th></th>
                            <th><input type="text" id="searchInput" placeholder="ゲーム名で検索"></th>
                            <th>
                                <select id='game_genre' name='game_genre'>
                                    <option></option>
                                    <option value='RPG'>RPG</option>
                                    <option value='アクション'>アクション</option>
                                    <option value='アドベンチャー'>アドベンチャー</option>
                                    <option value='シュミレーション'>シュミレーション</option>
                                    <option value='格闘'>格闘</option>
                                    <option value='音楽'>音楽(リズム)</option>
                                    <option value='その他'>その他</option>
                                </select>
                            </th>
                            <th>
                                <select id='game_model' name='model'>
                                    <option></option>
                                    <option value='Switch'>Switch</option>
                                    <option value='PS'>PS(プレイステーション)</option>
                                    <option value='3DS'>3DS</option>
                                    <option value='DS'>DS</option>
                                    <option value='wii'>Wii</option>
                                    <option value='64'>64</option>
                                    <option value='Xbox'>Xbox</option>
                                    <option value='ファミコン'>ファミコン</option>
                                    <option value='その他'>その他</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>商品ID</th>
                            <th>商品名</th>
                            <th>ジャンル</th>
                            <th>機種</th>
                            <th>在庫数</th>
                            <th>値段</th>
                            <th>ユーザー</th>
                            <th>購入日時</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $pdo->query('select * from bought inner join game on bought.game_id = game.game_id inner join user on user.user_id = bought.user_id');
                        $sql->execute();
                        foreach ($sql as $row): ?>
                            <tr>
                                <td> <?= $row['game_id'] ?></td>
                                <td> <?= $row['game_name'] ?> </td>
                                <td> <?= $row['game_genre'] ?> </td>
                                <td> <?= $row['game_model'] ?></td>
                                <td> <?= $row['game_stock'] ?> </td>
                                <td> <?= $row['game_price'] ?> </td>
                                <td> <?= $row['user_name'] ?> </td>
                                <td> <?= $row['buy_date'] ?> </td>
                                <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>

</html>