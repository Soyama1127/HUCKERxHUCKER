<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>アカウント</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <main>
        <label>商品管理</label>
        <form action="favorite.php" method="post">
            <input type="submit" value="お気に入り一覧" class="account_btn">
        </form>
        <form action="buy_history.php" method="post">
            <input type="submit" value="購入履歴" class="account_btn">
        </form>
        <br>
        <label>ユーザー管理</label>
        <form action="account_setting.php" method="post">
            <input type="submit" value="アカウント" class="account_btn">
        </form>
        <br><br>
        <form action="destroySession.php" method="post" onsubmit="return confirmLogout();">
            <input type="submit" value="ログアウト" class="logout_btn">
        </form>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>