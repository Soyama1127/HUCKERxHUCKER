<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>住所登録</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='account_setting.php'">＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <h1 class="login_label">住所</h1>
        <form action="address_update.php" method="post" onsubmit="return validateForm()">

            <label>姓(全角)</label>
            <input type="text" name="last_name" placeholder="例)山田" id="last_name" class="user_text"><br>
            <div id="error-message-lname" class="err_msg"></div>
            <label>名(全角)</label>
            <input type="text" name="first_name" placeholder="例)太郎" id="first_name" class="user_text"><br>
            <div id="error-message-fname" class="err_msg"></div>
            <label>姓カナ(全角)</label>
            <input type="text" name="last_namekana" placeholder="例)ヤマダ" id="last_namekana" class="user_text"><br>
            <div id="error-message-lkana" class="err_msg"></div>
            <label>名カナ(全角)</label>
            <input type="text" name="first_namekana" placeholder="例)タロウ" id="first_namekana" class="user_text"><br>
            <div id="error-message-fkana" class="err_msg"></div>

            <hr>
            <label>郵便番号(数字)</label>
            <input type="tel" name="post_code" placeholder="例)123-4567" id="post_code" class="user_text"><br>
            <div id="error-message-post" class="err_msg"></div>
            <hr>
            <div class="state_container">
                <label>都道府県</label>
                <select name="state" id="state" class="choose_state">
                    <option value="選択してください" selected>選択してください</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select>
            </div>
            <div id="error-message-state" class="err_msg"></div>
            <hr>
            <label>市町村</label>
            <input type="text" name="city" placeholder="例)横浜市緑区" id="city" class="user_text"><br>
            <div id="error-message-city" class="err_msg"></div>
            <label>番地</label>
            <input type="text" name="house_number" placeholder="例)青山1-1-1" id="house_number" class="user_text"><br>
            <div id="error-message-houseNum" class="err_msg"></div>
            <label>建物名(任意)</label>
            <input type="text" name="house" placeholder="例)柳ビル103" id="house" class="user_text"><br>

            <input name="registration" type="submit" value="登録" class="account_update">
        </form>
        <script src="./../js/user.js"></script>
    </main>
</body>

</html>