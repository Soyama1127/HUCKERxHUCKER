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
        <input type="radio" name="game_model" value="1" checked>Switch
        <input type="radio" name="game_model" value="2">PS(プレステーション)<br>
        <input type="radio" name="game_model" value="3">Wii
        <input type="radio" name="game_model" value="4">DS<br>
        <input type="radio" name="game_model" value="5">3DS
        <input type="radio" name="game_model" value="6">64<br>
        <input type="radio" name="game_model" value="7">xbox
        <input type="radio" name="game_model" value="8">ファミコン<br>
        <input type="radio" name="game_model" value="9">その他<br>
        ジャンル<br>
        <input type="radio" name="game_genre" value="1" checked>RPG
        <input type="radio" name="game_genre" value="2">アクション<br>
        <input type="radio" name="game_genre" value="3">アドベンチャー
        <input type="radio" name="game_genre" value="4">シュミレーション<br>
        <input type="radio" name="game_genre" value="5">格闘
        <input type="radio" name="game_genre" value="6">音楽<br>
        <input type="radio" name="game_genre" value="7">その他
</body>

</html>