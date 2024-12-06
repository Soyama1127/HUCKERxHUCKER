<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>アカウント更新</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='account.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="account_setting_main">
        <div class="account_setting_container">
            <label>アカウント名</label>
            <form action="update_name.php" method="post" onsubmit="return validateForm()" class="accountname_form">
                <input type="text" name="user_name" value="<?= $_SESSION['user_name'] ?>" class='account_text' required><br><br>
                <button onclick="location.href='home.php'" class='accountname_update_btn'>更新</button><br>
            </form>
            <hr><br>
            <button onclick="location.href='update.php'" class='account_btn'>
                <div class="account_setting_btn">
                    パスワード/ログインID
                    <img src='./../img/black_backbtn.png' class="black_btn">
                </div>
            </button><br>
            <button onclick="updateAddressBackNumber(1);location.href='address.php'" class='account_btn'>
                <div class="account_setting_btn">
                    住所
                    <img src='./../img/black_backbtn.png' class="black_btn">
                </div>
            </button><br>
            <button onclick="location.href='creditcard.php'" class='account_btn'>
                <div class="account_setting_btn">
                    クレジットカード情報
                    <img src='./../img/black_backbtn.png' class="black_btn">
                </div>
            </button>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>