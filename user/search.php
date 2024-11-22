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
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    
        <input type="textbox" name="1" placeholder="検索" style="width:300px;height:20px"><form action="search_result.php" method="post"><button type="submit">検索</button></form><br>
        機種<hr width="500">
        <input type="radio" name="1" value="1" checked>Switch
        <input type="radio" name="1" value="2">PS(プレステーション)<br>
        <input type="radio" name="1" value="3">Wii
        <input type="radio" name="1" value="4">DS<br>
        <input type="radio" name="1" value="5">3DS
        <input type="radio" name="1" value="6">64<br>
        <input type="radio" name="1" value="7">xbox
        <input type="radio" name="1" value="8">ファミコン<br>
        <input type="radio" name="1" value="9">その他<br>
        ジャンル<br>
        <input type="radio" name="1" value="1" checked>RPG
        <input type="radio" name="1" value="2">アクション<br>
        <input type="radio" name="1" value="3">アドベンチャー
        <input type="radio" name="1" value="4">シュミレーション<br>
        <input type="radio" name="1" value="5">格闘
        <input type="radio" name="1" value="6">音楽<br>
        <input type="radio" name="1" value="7">その他
</body>

</html>