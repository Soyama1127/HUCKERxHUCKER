<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>購入履歴</title>
</head>

<body>
    <header>
    <header class="logoback_header">
    <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main>
        <h3>購入履歴</h3>
        <table class="tablesorter">
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
                    <th>購入履歴</th>
                    <th>ユーザー</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
                $sql = $pdo->query('select game.game_id,game.game_name,game.game_genre,game.game_model,game.game_stock,game.game_price,bought.game_id,bought.buy_data,bought.user_id,user.user_id from game inner join bought on game.game_id = bought.game_id inner join bought on user.user_id = bought.user_id where user_id = ?');
                $sql->execute();
                foreach ($sql as $row): ?>
                    <tr>
                            <td> <?= $row['game_id'] ?></td>
                            <td> <?= $row['game_name'] ?> </td>
                            <td> <?= $row['game_genre'] ?> </td>
                            <td> <?= $row['game_model'] ?></td>
                            <td> <?= $row['game_stock'] ?> </td>
                            <td> <?= $row['game_price'] ?> </td>
                            <td> <?= $row['buy_data'] ?> </td>
                            <td> <?= $row['user_id'] ?> </td>
                            <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>

</html>