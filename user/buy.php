<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>レジ</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="buyBack()"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="buy_main">
        <div class="buy_field">
            <h1 class="login_label">レジ</h1>
            <?php
            if (isset($_POST['only_buy'])) {
                $sql = $pdo->prepare('select game_price from game where game_id = ?');
                $sql->execute([$_SESSION['game_id']]);
                foreach ($sql as $row) {
                    $_SESSION['price'] =  $row['game_price'];
                    $pageroot = 0;
                }
            } else if (isset($_POST['cart_buy'])) {
                $sql = $pdo->prepare('select sum(game.game_price) as allgame from game inner join cart on game.game_id = cart.game_id where cart_id = ?');
                $sql->execute([$_SESSION['user_id']]);
                foreach ($sql as $row) {
                    $_SESSION['price'] = $row['allgame'];
                    $pageroot = 1;
                }
            }
            ?>
            <label>請求金額</label>
            <div class="game_price_area">
                <h1 class="game_price">￥<?= $_SESSION['price'] ?></h1>
            </div>
            <hr>
            <label>住所</label>
            <?php
            if (isset($_SESSION['user_name'])) {
                $sql = $pdo->prepare('select * FROM user where user_id = ?');
                $sql->execute([$_SESSION['user_id']]);
                $user = $sql->fetch();
            } else {
                $user = [
                    'last_name' => '',
                    'first_name' => '',
                    'last_namekana' => '',
                    'first_namekana' => '',
                    'post_code' => '',
                    'state' => '選択してください',
                    'city' => '',
                    'house_number' => '',
                    'house' => '',
                    'card_number' => '',
                    'date_month' => '',
                    'date_year' => '',
                    'security_card' => ''
                ];
            }
            ?>
            <p class="buy_address">姓(全角)</p>
            <input type="text" name="last_name" placeholder="例)山田" id="last_name" class="user_text" value="<?= htmlspecialchars($user['last_name']) ?>"><br>
            <div id="error-message-lname" class="err_msg"></div>

            <p class="buy_address">名(全角)</p>
            <input type="text" name="first_name" placeholder="例)太郎" id="first_name" class="user_text" value="<?= htmlspecialchars($user['first_name']) ?>"><br>
            <div id="error-message-fname" class="err_msg"></div>

            <p class="buy_address">姓カナ(全角)</p>
            <input type="text" name="last_namekana" placeholder="例)ヤマダ" id="last_namekana" class="user_text" value="<?= htmlspecialchars($user['last_namekana']) ?>"><br>
            <div id="error-message-lkana" class="err_msg"></div>

            <p class="buy_address">名カナ(全角)</p>
            <input type="text" name="first_namekana" placeholder="例)タロウ" id="first_namekana" class="user_text" value="<?= htmlspecialchars($user['first_namekana']) ?>"><br>
            <div id="error-message-fkana" class="err_msg"></div>

            <hr>

            <p class="buy_address">郵便番号(数字)</p>
            <input type="tel" name="post_code" placeholder="例)123-4567" id="post_code" class="user_text" value="<?= htmlspecialchars($user['post_code']) ?>"><br>
            <div id="error-message-post" class="err_msg"></div>

            <hr>

            <div class="state_container">
                <p class="buy_address">都道府県</p>
                <select name="state" id="state" class="choose_state">
                    <option value="選択してください" <?= $user['state'] === '選択してください' ? 'selected' : '' ?>>選択してください</option>
                    <option value="北海道" <?= $user['state'] === '北海道' ? 'selected' : '' ?>>北海道</option>
                    <option value="青森県" <?= $user['state'] === '青森県' ? 'selected' : '' ?>>青森県</option>
                    <option value="岩手県" <?= $user['state'] === '岩手県' ? 'selected' : '' ?>>岩手県</option>
                    <option value="宮城県" <?= $user['state'] === '宮城県' ? 'selected' : '' ?>>宮城県</option>
                    <option value="秋田県" <?= $user['state'] === '秋田県' ? 'selected' : '' ?>>秋田県</option>
                    <option value="山形県" <?= $user['state'] === '山形県' ? 'selected' : '' ?>>山形県</option>
                    <option value="福島県" <?= $user['state'] === '福島県' ? 'selected' : '' ?>>福島県</option>
                    <option value="茨城県" <?= $user['state'] === '茨城県' ? 'selected' : '' ?>>茨城県</option>
                    <option value="栃木県" <?= $user['state'] === '栃木県' ? 'selected' : '' ?>>栃木県</option>
                    <option value="群馬県" <?= $user['state'] === '群馬県' ? 'selected' : '' ?>>群馬県</option>
                    <option value="埼玉県" <?= $user['state'] === '埼玉県' ? 'selected' : '' ?>>埼玉県</option>
                    <option value="千葉県" <?= $user['state'] === '千葉県' ? 'selected' : '' ?>>千葉県</option>
                    <option value="東京都" <?= $user['state'] === '東京都' ? 'selected' : '' ?>>東京都</option>
                    <option value="神奈川県" <?= $user['state'] === '神奈川県' ? 'selected' : '' ?>>神奈川県</option>
                    <option value="山梨県" <?= $user['state'] === '山梨県' ? 'selected' : '' ?>>山梨県</option>
                    <option value="長野県" <?= $user['state'] === '長野県' ? 'selected' : '' ?>>長野県</option>
                    <option value="新潟県" <?= $user['state'] === '新潟県' ? 'selected' : '' ?>>新潟県</option>
                    <option value="富山県" <?= $user['state'] === '富山県' ? 'selected' : '' ?>>富山県</option>
                    <option value="石川県" <?= $user['state'] === '石川県' ? 'selected' : '' ?>>石川県</option>
                    <option value="福井県" <?= $user['state'] === '福井県' ? 'selected' : '' ?>>福井県</option>
                    <option value="岐阜県" <?= $user['state'] === '岐阜県' ? 'selected' : '' ?>>岐阜県</option>
                    <option value="静岡県" <?= $user['state'] === '静岡県' ? 'selected' : '' ?>>静岡県</option>
                    <option value="愛知県" <?= $user['state'] === '愛知県' ? 'selected' : '' ?>>愛知県</option>
                    <option value="三重県" <?= $user['state'] === '三重県' ? 'selected' : '' ?>>三重県</option>
                    <option value="滋賀県" <?= $user['state'] === '滋賀県' ? 'selected' : '' ?>>滋賀県</option>
                    <option value="京都府" <?= $user['state'] === '京都府' ? 'selected' : '' ?>>京都府</option>
                    <option value="大阪府" <?= $user['state'] === '大阪府' ? 'selected' : '' ?>>大阪府</option>
                    <option value="兵庫県" <?= $user['state'] === '兵庫県' ? 'selected' : '' ?>>兵庫県</option>
                    <option value="奈良県" <?= $user['state'] === '奈良県' ? 'selected' : '' ?>>奈良県</option>
                    <option value="和歌山県" <?= $user['state'] === '和歌山県' ? 'selected' : '' ?>>和歌山県</option>
                    <option value="鳥取県" <?= $user['state'] === '鳥取県' ? 'selected' : '' ?>>鳥取県</option>
                    <option value="島根県" <?= $user['state'] === '島根県' ? 'selected' : '' ?>>島根県</option>
                    <option value="岡山県" <?= $user['state'] === '岡山県' ? 'selected' : '' ?>>岡山県</option>
                    <option value="広島県" <?= $user['state'] === '広島県' ? 'selected' : '' ?>>広島県</option>
                    <option value="山口県" <?= $user['state'] === '山口県' ? 'selected' : '' ?>>山口県</option>
                    <option value="徳島県" <?= $user['state'] === '徳島県' ? 'selected' : '' ?>>徳島県</option>
                    <option value="香川県" <?= $user['state'] === '香川県' ? 'selected' : '' ?>>香川県</option>
                    <option value="愛媛県" <?= $user['state'] === '愛媛県' ? 'selected' : '' ?>>愛媛県</option>
                    <option value="高知県" <?= $user['state'] === '高知県' ? 'selected' : '' ?>>高知県</option>
                    <option value="福岡県" <?= $user['state'] === '福岡県' ? 'selected' : '' ?>>福岡県</option>
                    <option value="佐賀県" <?= $user['state'] === '佐賀県' ? 'selected' : '' ?>>佐賀県</option>
                    <option value="長崎県" <?= $user['state'] === '長崎県' ? 'selected' : '' ?>>長崎県</option>
                    <option value="熊本県" <?= $user['state'] === '熊本県' ? 'selected' : '' ?>>熊本県</option>
                    <option value="大分県" <?= $user['state'] === '大分県' ? 'selected' : '' ?>>大分県</option>
                    <option value="宮崎県" <?= $user['state'] === '宮崎県' ? 'selected' : '' ?>>宮崎県</option>
                    <option value="鹿児島県" <?= $user['state'] === '鹿児島県' ? 'selected' : '' ?>>鹿児島県</option>
                    <option value="沖縄県" <?= $user['state'] === '沖縄県' ? 'selected' : '' ?>>沖縄県</option>
                </select>
            </div>
            <div id="error-message-state" class="err_msg"></div>

            <hr>

            <p class="buy_address">市町村</p>
            <input type="text" name="city" placeholder="例)横浜市緑区" id="city" class="user_text" value="<?= htmlspecialchars($user['city']) ?>"><br>
            <div id="error-message-city" class="err_msg"></div>

            <p class="buy_address">番地</p>
            <input type="text" name="house_number" placeholder="例)青山1-1-1" id="house_number" class="user_text" value="<?= htmlspecialchars($user['house_number']) ?>"><br>
            <div id="error-message-houseNum" class="err_msg"></div>

            <p class="buy_address">建物名(任意)</p>
            <input type="text" name="house" placeholder="例)柳ビル103" id="house" class="user_text" value="<?= htmlspecialchars($user['house']) ?>"><br>

            <hr>
            <div class="pay">
                <label>お支払方法</label>
                <select id="select_pay" onchange="change();">
                    <option value="選択してください">選択してください</option>
                    <option value="paypay">PayPay</option>
                    <option value="credit">クレジットカード</option>
                    <option value="convenience">コンビニ払い</option>
                </select>
            </div>
            <div id="error-message-pay" class="err_msg"></div>
            <div id="creditCardInfo" style="display: none;">
                <label>カード番号</label>
                <input type="tel" name="card_id" placeholder="0000 0000 0000 0000" class="credit_text" maxlength="19" pattern="\d{4} \d{4} \d{4} \d{4}" title="カード番号は0000 0000 0000 0000の形式で入力してください" value="<?= $user['card_number'] ?>" required>
                <br>
                <label>有効期限</label>
                <div class="card_deadline">
                    <input type="number" name="card_month" placeholder="MM" class="minitext" min="1" max="12" value="<?= $user['date_month'] ?>" required>月
                    <input type="number" name="card_year" placeholder="YY" class="minitext" min="23" max="99" value="<?= $user['date_year'] ?>" required>年
                </div>
                <br>
                <label>セキュリティ番号</label>
                <input type="password" name="security" class="minitext" maxlength="4" minlength="3" pattern="\d{3,4}" title="セキュリティコードは3～4桁の数字で入力してください" value="<?= $user['security_card'] ?>" required>
                <br>
            </div>
            <br><br>
            <form action="buy_complete.php" method="post" class="buy_form" onsubmit="return validateForm()">
                <input type='hidden' name='onlyorcart' value='<?= $pageroot ?>'>
                <input type="submit" method="post" value="購入" class="buy">
            </form>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>