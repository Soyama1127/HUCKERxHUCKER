<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>検索</title>
</head>

<body>
    <header>
        検索
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    
        <input type="textbox" name="game_name" placeholder="検索" style="width:300px;height:20px"><form action="search_result.php" method="post"><button type="submit">検索</button></form><br>
        機種<hr width="500">
        <input type="radio" name="game_model" value="Switch">Switch
        <input type="radio" name="game_model" value="PS(プレステーション)">PS(プレステーション)<br>
        <input type="radio" name="game_model" value="Wii">Wii
        <input type="radio" name="game_model" value="DS">DS<br>
        <input type="radio" name="game_model" value="3DS">3DS
        <input type="radio" name="game_model" value="64">64<br>
        <input type="radio" name="game_model" value="xbox">xbox
        <input type="radio" name="game_model" value="ファミコン">ファミコン<br>
        <input type="radio" name="game_model" value="その他">その他<br>
        ジャンル<br>
        <input type="radio" name="game_genre" value="RPG">RPG
        <input type="radio" name="game_genre" value="アクション">アクション<br>
        <input type="radio" name="game_genre" value="アドベンチャー">アドベンチャー
        <input type="radio" name="game_genre" value="シュミレーション">シュミレーション<br>
        <input type="radio" name="game_genre" value="格闘">格闘
        <input type="radio" name="game_genre" value="音楽">音楽<br>
        <input type="radio" name="game_genre" value="その他">その他
</body>

</html>