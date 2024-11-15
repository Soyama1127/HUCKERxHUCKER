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
        <button class='back-btn' onclick='window.history.back();'>＜　アカウント設定</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <label>アカウント名</label>
        <h3>田中　太郎</h3>
        <form action="update.php" method="post">
            <input tyoe="submit" value="パスワード/ログインID">
        </form>
        <form action="address.php" method="post">
            <input type="submit" value="住所">
        </form>
        <form action="creditcard.php" method="post">
            <input tyoe="submit" value="クレジットカード情報">
        </form>
        <br>
        <from action="home.php" method="post">
            <input type="submit" value="更新">
        </from>
    </main>
</body>

</html>