<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ユーザーログイン</title>
</head>

<body>
    <header>
        <p>GAMESoya</p>
    </header>
    <main>
        <form action="home.php" method="post">
            <p>Login</p>
            <p>ログインID</p>
            <input type="text" name="login_id"><br><br>
            <p>パスワード</p>
            <input type="text" name="pass"><br><br>
            <input type="submit" value="ログイン"><br>
            <a href="home.php">ゲストとしてログイン</a>
            <br><br>
        </form>
        <form action="signup.php" method="post">
            <input type="submit" value="新規登録">
        </form>
    </main>
</body>

</html>