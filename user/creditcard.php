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
    <title>カード情報</title>
</head>

<body>
    <header class="signup_header">
        <button class='back-btn' onclick="location.href='account_setting.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="credit_main">
        <div class="credit_container">
            <h1 class="login_label">カード情報</h1>
            <?php
            $sql = $pdo->prepare('select * from user where user_id = ?');
            $sql->execute([$_SESSION['user_id']]);
            foreach ($sql as $row): ?>
            <form action="update_card.php" method="post" class="credit_form" onsubmit="creditCheck()">
                <label>カード番号</label>
                <input type="tel" name="card_id" placeholder="0000 0000 0000 0000" class="credit_text" maxlength="19" pattern="\d{4} \d{4} \d{4} \d{4}" title="カード番号は0000 0000 0000 0000の形式で入力してください" value="<?= $row['card_number'] ?>"><br>
                <label>有効期限</label>
                <div class="card_deadline">
                    <input type="number" name="card_month" placeholder="MM" class="minitext" min="1" max="12" value="<?= $row['date_month'] ?>" required>月
                    <input type="number" name="card_year" placeholder="YY" class="minitext" min="23" max="99" value="<?= $row['date_year'] ?>" required>年
                </div><br>
                <label>カード名義</label>
                <input type=text name=card_name class="credit_text" value="<?= $row['card_name'] ?>"><br>
                <label>セキュリティコード</label>
                <input type="password" name="security" class="minitext" maxlength="4" minlength="3" pattern="\d{3,4}" title="セキュリティコードは3～4桁の数字で入力してください" value="<?= $row['security_card'] ?>" required><br>
                <div class="card_entry_area">
                    <input type=submit value=登録 class="card_entry">
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>