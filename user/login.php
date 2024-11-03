<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ユーザーログイン</title>
</head>

<body>
    <main>
        <h1>GAMESoya</h1>
        <form action="home.php" method="post">
            <label class="login_label">Login</label><br>
            <label>ログインID</label><br>
            <input type="text" name="login_id" id="login_id" class="user_text"><br>
            <label>パスワード</label><br>
            <input type="text" name="pass" id="pass" class="user_text"><br>
            <input type="submit" value="ログイン" class="user_button"><br>
            <a href="home.php" class="user_link">ゲストとしてログイン</a>
            <br>
        </form>
        <form action="signup.php" method="post">
            <input type="submit" value="新規登録" class="user_button">
        </form>
    </main>
</body>

</html>