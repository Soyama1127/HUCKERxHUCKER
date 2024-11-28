<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品登録</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main class="gameadd_main">
        <div class="gameadd_container">
            <div class="login_h1">
                <h1>商品登録</h1>
            </div>
            <form action="game_add_complete.php" method="post" enctype="multipart/form-data" class=add_game>

                <label>ゲーム名</label><br>
                <input type=text name=game_name class=login_text required><br>
                <label>料金</label><br>
                <input type=text name=game_price class=login_text placeholder="￥" required><br>
                <label>機種</label><br>
                <select name='model' class=game_list>
                    <option value='Switch'>Switch</option>
                    <option value='PS'>PS(プレイステーション)</option>
                    <option value='3DS'>3DS</option>
                    <option value='DS'>DS</option>
                    <option value='wii'>Wii</option>
                    <option value='64'>64</option>
                    <option value='Xbox'>Xbox</option>
                    <option value='ファミコン'>ファミコン</option>
                    <option value='その他'>その他</option>
                </select><br>
                <label>ジャンル</label><br>
                <select name='game_genre' class=game_list>
                    <option value='RPG'>RPG</option>
                    <option value='アクション'>アクション</option>
                    <option value='アドベンチャー'>アドベンチャー</option>
                    <option value='シュミレーション'>シュミレーション</option>
                    <option value='格闘'>格闘</option>
                    <option value='音楽'>音楽(リズム)</option>
                    <option value='その他'>その他</option>
                </select><br>
                <label>アイコン</label><br>
                <input type="file" name="image" class=game_icon required><br>
                <label>サンプル画像</label><br>
                <input type="file" name="sample1" class=game_icon required><br>
                <input type="file" name="sample2" class=game_icon><br>
                <input type="file" name="sample3" class=game_icon><br>
                <label>概要</label><br>
                <textarea name="summary" rows="5" cols="40" class=game_summary required></textarea><br>
                <div class="add_btn_area">
                    <input type=submit value="登録" class="add_button">
                </div>
            </form>
        </div>
    </main>
</body>

</html>