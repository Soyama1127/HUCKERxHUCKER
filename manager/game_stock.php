<?php
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫管理</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main class="game_choose_main">
        <div class="game_choose_container">
            <div class="login_h1">
                <h1>在庫一覧</h1>
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
            <table border="1" id="stock_asc" class="tablesorter">
                <thead>
                    <tr>
                        <th>商品ID</th>
                        <th>商品名</th>
                        <th>ジャンル</th>
                        <th>機種</th>
                        <th>
                            在庫数
                            <button onclick="ChangeTable(0);">↑</button>
                            <button onclick="ChangeTable(1);">↓</button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from game order by game_stock asc";
                    foreach ($pdo->query($sql) as $row) : ?>
                        <tr>
                            <td><?= $row['game_id'] ?></td>
                            <td> <?= $row['game_name'] ?> </td>
                            <td> <?= $row['game_genre'] ?> </td>
                            <td> <?= $row['game_model'] ?></td>
                            <td> <?= $row['game_stock'] ?> </td>
                            <form action='game_stock_add.php' method='post'>
                                <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                                <td><button class="add_btn">補充</button></td>
                            </form>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <table border="1" id="stock_desc" class="tablesorter" style="display: none;">
                <thead>
                    <tr>
                        <th>商品ID</th>
                        <th>商品名</th>
                        <th>ジャンル</th>
                        <th>機種</th>
                        <th>
                            在庫数
                            <button onclick="ChangeTable(0);">↑</button>
                            <button onclick="ChangeTable(1);">↓</button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from game order by game_stock desc";
                    foreach ($pdo->query($sql) as $row) : ?>
                        <tr>
                            <td><?= $row['game_id'] ?></td>
                            <td> <?= $row['game_name'] ?> </td>
                            <td> <?= $row['game_genre'] ?> </td>
                            <td> <?= $row['game_model'] ?></td>
                            <td> <?= $row['game_stock'] ?> </td>
                            <form action='game_stock_add.php' method='post'>
                                <input type='hidden' name=game_id value=<?= $row['game_id'] ?>>
                                <td><button class="add_btn">補充</button></td>
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