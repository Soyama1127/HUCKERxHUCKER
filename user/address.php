<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>住所登録</title>
    <style>dialog{ width: 300px; padding: 20px; border: 1px solid #ccc; }</style>
</head>

<body>
    <header>
        <button class='back-btn' onclick="addressBack()"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <main>
        <h1 class="login_label">住所</h1>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = $pdo->prepare('select * from user where user_id = ?');
        $sql->execute([$_SESSION['user_id']]);
        foreach ($sql as $row): ?>
            <form action="address_update.php" method="post" onsubmit="return validateForm()">

                <label>姓(全角)</label>
                <input type="text" name="last_name" placeholder="例)山田" id="last_name" class="user_text" value=<?= $row['last_name'] ?>><br>
                <div id="error-message-lname" class="err_msg"></div>
                <label>名(全角)</label>
                <input type="text" name="first_name" placeholder="例)太郎" id="first_name" class="user_text" value=<?= $row['first_name'] ?>><br>
                <div id="error-message-fname" class="err_msg"></div>
                <label>姓カナ(全角)</label>
                <input type="text" name="last_namekana" placeholder="例)ヤマダ" id="last_namekana" class="user_text" value=<?= $row['last_namekana'] ?>><br>
                <div id="error-message-lkana" class="err_msg"></div>
                <label>名カナ(全角)</label>
                <input type="text" name="first_namekana" placeholder="例)タロウ" id="first_namekana" class="user_text" value=<?= $row['first_namekana'] ?>><br>
                <div id="error-message-fkana" class="err_msg"></div>
                <hr>
                <label>郵便番号(数字)</label>
                <input type="tel" name="post_code" placeholder="例)123-4567" id="post_code" class="user_text" value=<?= $row['post_code'] ?>><br>
                <div id="error-message-post" class="err_msg"></div>
                <hr>
                <div class="state_container">
                    <label>都道府県</label>
                    <select name="state" id="state" class="choose_state">
                        <option value="選択してください" <?= $row['state'] == '選択してください' ? 'selected' : '' ?>>選択してください</option>
                        <option value="北海道" <?= $row['state'] == '北海道' ? 'selected' : '' ?>>北海道</option>
                        <option value="青森県" <?= $row['state'] == '青森県' ? 'selected' : '' ?>>青森県</option>
                        <option value="岩手県" <?= $row['state'] == '岩手県' ? 'selected' : '' ?>>岩手県</option>
                        <option value="宮城県" <?= $row['state'] == '宮城県' ? 'selected' : '' ?>>宮城県</option>
                        <option value="秋田県" <?= $row['state'] == '秋田県' ? 'selected' : '' ?>>秋田県</option>
                        <option value="山形県" <?= $row['state'] == '山形県' ? 'selected' : '' ?>>山形県</option>
                        <option value="福島県" <?= $row['state'] == '福島県' ? 'selected' : '' ?>>福島県</option>
                        <option value="茨城県" <?= $row['state'] == '茨城県' ? 'selected' : '' ?>>茨城県</option>
                        <option value="栃木県" <?= $row['state'] == '栃木県' ? 'selected' : '' ?>>栃木県</option>
                        <option value="群馬県" <?= $row['state'] == '群馬県' ? 'selected' : '' ?>>群馬県</option>
                        <option value="埼玉県" <?= $row['state'] == '埼玉県' ? 'selected' : '' ?>>埼玉県</option>
                        <option value="千葉県" <?= $row['state'] == '千葉県' ? 'selected' : '' ?>>千葉県</option>
                        <option value="東京都" <?= $row['state'] == '東京都' ? 'selected' : '' ?>>東京都</option>
                        <option value="神奈川県" <?= $row['state'] == '神奈川県' ? 'selected' : '' ?>>神奈川県</option>
                        <option value="山梨県" <?= $row['state'] == '山梨県' ? 'selected' : '' ?>>山梨県</option>
                        <option value="長野県" <?= $row['state'] == '長野県' ? 'selected' : '' ?>>長野県</option>
                        <option value="新潟県" <?= $row['state'] == '新潟県' ? 'selected' : '' ?>>新潟県</option>
                        <option value="富山県" <?= $row['state'] == '富山県' ? 'selected' : '' ?>>富山県</option>
                        <option value="石川県" <?= $row['state'] == '石川県' ? 'selected' : '' ?>>石川県</option>
                        <option value="福井県" <?= $row['state'] == '福井県' ? 'selected' : '' ?>>福井県</option>
                        <option value="岐阜県" <?= $row['state'] == '岐阜県' ? 'selected' : '' ?>>岐阜県</option>
                        <option value="静岡県" <?= $row['state'] == '静岡県' ? 'selected' : '' ?>>静岡県</option>
                        <option value="愛知県" <?= $row['state'] == '愛知県' ? 'selected' : '' ?>>愛知県</option>
                        <option value="三重県" <?= $row['state'] == '三重県' ? 'selected' : '' ?>>三重県</option>
                        <option value="滋賀県" <?= $row['state'] == '滋賀県' ? 'selected' : '' ?>>滋賀県</option>
                        <option value="京都府" <?= $row['state'] == '京都府' ? 'selected' : '' ?>>京都府</option>
                        <option value="大阪府" <?= $row['state'] == '大阪府' ? 'selected' : '' ?>>大阪府</option>
                        <option value="兵庫県" <?= $row['state'] == '兵庫県' ? 'selected' : '' ?>>兵庫県</option>
                        <option value="奈良県" <?= $row['state'] == '奈良県' ? 'selected' : '' ?>>奈良県</option>
                        <option value="和歌山県" <?= $row['state'] == '和歌山県' ? 'selected' : '' ?>>和歌山県</option>
                        <option value="鳥取県" <?= $row['state'] == '鳥取県' ? 'selected' : '' ?>>鳥取県</option>
                        <option value="島根県" <?= $row['state'] == '島根県' ? 'selected' : '' ?>>島根県</option>
                        <option value="岡山県" <?= $row['state'] == '岡山県' ? 'selected' : '' ?>>岡山県</option>
                        <option value="広島県" <?= $row['state'] == '広島県' ? 'selected' : '' ?>>広島県</option>
                        <option value="山口県" <?= $row['state'] == '山口県' ? 'selected' : '' ?>>山口県</option>
                        <option value="徳島県" <?= $row['state'] == '徳島県' ? 'selected' : '' ?>>徳島県</option>
                        <option value="香川県" <?= $row['state'] == '香川県' ? 'selected' : '' ?>>香川県</option>
                        <option value="愛媛県" <?= $row['state'] == '愛媛県' ? 'selected' : '' ?>>愛媛県</option>
                        <option value="高知県" <?= $row['state'] == '高知県' ? 'selected' : '' ?>>高知県</option>
                        <option value="福岡県" <?= $row['state'] == '福岡県' ? 'selected' : '' ?>>福岡県</option>
                        <option value="佐賀県" <?= $row['state'] == '佐賀県' ? 'selected' : '' ?>>佐賀県</option>
                        <option value="長崎県" <?= $row['state'] == '長崎県' ? 'selected' : '' ?>>長崎県</option>
                        <option value="熊本県" <?= $row['state'] == '熊本県' ? 'selected' : '' ?>>熊本県</option>
                        <option value="大分県" <?= $row['state'] == '大分県' ? 'selected' : '' ?>>大分県</option>
                        <option value="宮崎県" <?= $row['state'] == '宮崎県' ? 'selected' : '' ?>>宮崎県</option>
                        <option value="鹿児島県" <?= $row['state'] == '鹿児島県' ? 'selected' : '' ?>>鹿児島県</option>
                        <option value="沖縄県" <?= $row['state'] == '沖縄県' ? 'selected' : '' ?>>沖縄県</option>
                    </select>

                </div>
                <div id="error-message-state" class="err_msg"></div>
                <hr>
                <label>市町村</label>
                <input type="text" name="city" placeholder="例)横浜市緑区" id="city" class="user_text" value=<?= $row['city'] ?>><br>
                <div id="error-message-city" class="err_msg"></div>
                <label>番地</label>
                <input type="text" name="house_number" placeholder="例)青山1-1-1" id="house_number" class="user_text" value=<?= $row['house_number'] ?>><br>
                <div id="error-message-houseNum" class="err_msg"></div>
                <label>建物名(任意)</label>
                <input type="text" name="house" placeholder="例)柳ビル103" id="house" class="user_text" value=<?= $row['house'] ?>><br>

                <input name="registration" type="submit" value="登録" class="account_update">
            </form>
        <?php endforeach ?>
        <script src="./../js/user.js"></script>
    </main>
</body>

</html>