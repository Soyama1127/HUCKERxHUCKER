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
        GAMESoya管理
    </header>
    <main>
        <p><h3>管理者ログイン</h3></p>
        <form action="home.php" method="post">
            管理者ID<br>
            <input type="text" name="manager_id"><br>
            パスワード<br>
            <input type="text" name="manager_pass"><br>
            <br><br>
            <div class="login_button">
                <p><input type="submit" value="ログインする"></p>
            </div>
            
        </form>
        <form action="signup.php" method="post">
            <p><input type="submit" value="新規登録"></p>
        </form>

    </main>
</body>

</html>