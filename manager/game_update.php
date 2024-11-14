<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品更新</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <h1>商品更新</h1><br>
        <?php
        $game_id = $_POST['game_id'];
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = $pdo->prepare('select * from game where game_id = ?');
        $sql->execute([$game_id]);
        foreach ($sql as $row): ?>
            <form action="game_add_complete.php" method="post" enctype="multipart/form-data" class=add_game>
                <label>ゲーム名</label><br>
                <input type=text name=game_name class=login_text value=<?= $row['game_name'] ?> required><br>
                <label>料金</label><br>
                <input type=text name=game_price class=login_text placeholder="￥" value=<?= $row['game_price'] ?> required><br>
                <label>機種</label><br>
                <select name='model' class="game_list">
                    <option value='Switch' <?= $row['game_model'] == 'Switch' ? 'selected' : '' ?>>Switch</option>
                    <option value='PS' <?= $row['game_model'] == 'PS' ? 'selected' : '' ?>>PS(プレイステーション)</option>
                    <option value='wii' <?= $row['game_model'] == 'wii' ? 'selected' : '' ?>>Wii</option>
                    <option value='64' <?= $row['game_model'] == '64' ? 'selected' : '' ?>>64</option>
                    <option value='Xbox' <?= $row['game_model'] == 'Xbox' ? 'selected' : '' ?>>Xbox</option>
                    <option value='ファミコン' <?= $row['game_model'] == 'ファミコン' ? 'selected' : '' ?>>ファミコン</option>
                    <option value='その他' <?= $row['game_model'] == 'その他' ? 'selected' : '' ?>>その他</option>
                </select><br>
                <label>ジャンル</label><br>
                <select name='game_genre' class="game_list">
                    <option value='RPG' <?= $row['game_genre'] == 'RPG' ? 'selected' : '' ?>>RPG</option>
                    <option value='アクション' <?= $row['game_genre'] == 'アクション' ? 'selected' : '' ?>>アクション</option>
                    <option value='アドベンチャー' <?= $row['game_genre'] == 'アドベンチャー' ? 'selected' : '' ?>>アドベンチャー</option>
                    <option value='シュミレーション' <?= $row['game_genre'] == 'シュミレーション' ? 'selected' : '' ?>>シュミレーション</option>
                    <option value='格闘' <?= $row['game_genre'] == '格闘' ? 'selected' : '' ?>>格闘</option>
                    <option value='音楽' <?= $row['game_genre'] == '音楽' ? 'selected' : '' ?>>音楽(リズム)</option>
                    <option value='その他' <?= $row['game_genre'] == 'その他' ? 'selected' : '' ?>>その他</option>
                </select><br>
                <label>アイコン</label><br>
                <input type="file" name="image" class=game_icon required><br>
                <label>サンプル画像</label><br>
                <input type="file" name="sample1" class=game_icon required><br>
                <input type="file" name="sample2" class=game_icon><br>
                <input type="file" name="sample3" class=game_icon><br>
                <label>概要</label><br>
                <textarea name="summary" rows="5" cols="40" class=game_summary required><?= $row['game_summary'] ?></textarea><br>
                <input type=submit value="更新" class="add_button"><br>
            <?php endforeach ?>
            </form>
    </main>
</body>

</html>