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
        商品登録
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
        <select name='game_genre'>
        <option value='RPG'>RPG</option>
        <option value='action'>アクション</option>
        <option value='adventure'>アドベンチャー</option>
        <option value='simulation'>シュミレーション</option>
        <option value='Xdox'>Xbox</option>
        <option value='famicon'>ファミコン</option>
        <option value='other'>その他</option>
        </select>
        
    </main>
</body>

</html>