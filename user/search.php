<?php
session_start();
$_SESSION['game_name'] = null;
$_SESSION['game_model'] = null;
$_SESSION['game_genre'] = null;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>検索</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <h1 class="login_label">検索</h1>
    <div class="search_box">
        <div class="search_container">
            <form action="search_result.php" method="post">
                <div class="search_text_container">
                    <input type="text" name="game_name" placeholder="キーワード検索" class="search_textbox">
                    <input type="submit" value="検索" class="search_btn">
                </div>
                <br>
                <div class="search_model">
                    <label>機種(選択しない場合は全選択になります。)</label>
                    <hr>
                    <div class="search_model_area">
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="Switch">Switch
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="PS(プレステーション)">PS(プレステーション)
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="Wii">Wii
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="DS">DS
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="3DS">3DS
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="64">64
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="Xbox">Xbox
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="ファミコン">ファミコン
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_model" value="その他">その他
                        </div>
                    </div>
                </div>
                <div class="search_genre">
                    <label>ジャンル(選択しない場合は全選択になります。)</label>
                    <hr>
                    <div class="search_genre_area">
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="RPG">RPG
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="アクション">アクション
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="アドベンチャー">アドベンチャー
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="シュミレーション">シュミレーション
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="格闘">格闘
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="音楽">音楽
                        </div>
                        <div class="radio_btn">
                            <input type="radio" name="game_genre" value="その他">その他
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>