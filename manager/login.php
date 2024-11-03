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
        <h2>管理者ログイン</h2>
        <div id="error-message-log" class="err_msg"></div>
        <form action="home.php" method="post">
            <label for="manager_id">管理者ID</label><br>
            <input type="text" name="manager_id" id="manager_id" class="login_text" required><br>
            <label for="manager_pass">パスワード</label><br>
            <input type="password" name="manager_pass" id="manager_pass" class="login_text" required><br>
            <input type="submit" value="ログインする" class="manager_button">
        </form>
        <form action="signup.php" method="post">
            <input type="submit" value="新規登録" class="manager_button">
        </form>
    </main>
</body>

</html>