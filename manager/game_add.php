<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品登録</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
    <form action="game_add_complete.php" method="post" enctype="multipart/form-data">
        商品登録<br>
        ゲーム名<br>
        <input type=text name=game_name><br>
        料金<br>
        <input type=text name=game_price><br>
        機種<br>
        <select name='model'>
        <option value='switch'>switch</option>
        <option value='PS'>PS(プレイステーション)</option>
        <option value='wii'>Wii</option>
        <option value='64'>64</option>
        <option value='Xdox'>Xbox</option>
        <option value='famicon'>ファミコン</option>
        <option value='other'>その他</option>
        </select><br>
        ジャンル<br>
        <select name='game_genre'>
        <option value='RPG'>RPG</option>
        <option value='action'>アクション</option>
        <option value='adventure'>アドベンチャー</option>
        <option value='simulation'>シュミレーション</option>
        <option value='Xdox'>Xbox</option>
        <option value='famicon'>ファミコン</option>
        <option value='other'>その他</option>
        </select><br>
        アイコン<br>
        <input type="file" name="image"><br>
        サンプル画像<br>
        <input type="file" name="sample1"><br>
        <input type="file" name="sample2"><br>
        <input type="file" name="sample3"><br>
        概要<br>
        <textarea name="summary" rows="5" cols="40"></textarea><br>
        <input type=submit value="登録" class="manager_button"><br>

  
    </form>    
    </main>
</body>

</html>