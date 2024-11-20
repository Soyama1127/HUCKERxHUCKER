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
    <header>
        <button class='back-btn' onclick="location.href='account.php'">＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <label>アカウント名</label>
        <input type="text" value="<?=$_SESSION['user_name']?>" class='account_text'><br><br>
        <button onclick="location.href='update.php'" class='account_setting_btn'>パスワード/ログインID</button><br>
        <button onclick="location.href='address.php'" class='account_setting_btn'>住所</button><br>
        <button onclick="location.href='creditcard.php'" class='account_setting_btn'>クレジットカード情報</button>
        <br>
        <button onclick="location.href='home.php'" class='account_update'>更新</button>
    </main>
</body>

</html>