<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者ログイン</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <p>
        <h2>管理者ログイン</h2>
        </p>
        <form action="home.php" method="post">
            管理者ID<br>
            <input type="text" name="manager_id" class="manager_id"><br>
            パスワード<br>
            <input type="text" name="manager_pass" class="manager_pass"><br>
            <br><br>
            <p><input type="submit" value="ログインする" class="login_button"></p>

        </form>
        <form action="signup.php" method="post">
            <p><input type="submit" value="新規登録" class="signup_button"></p>
        </form>
    </main>
</body>

</html>