<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>ゲーム一覧</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main class="game_choose_main">
        <div class="game_choose_container">
            <div class="login_h1">
                <h1>更新したい商品の選択</h1>
            </div>
            <table class="tablesorter">
                <thead>
                    <tr>
                        <th>ワード検索：<input type="text" id="searchInput" placeholder="ゲーム名で検索"></th>
                        <th>
                            ジャンル：
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
                            機種：
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
                </thead>
            </table>
            <table border="1" id="gameTable" class="tablesorter">
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
            <br>
        </div>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>