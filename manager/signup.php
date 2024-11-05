<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者登録</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <h1>管理者登録</h1>
        <form id="signup" action="signup_complete.php" method="post" onsubmit="return signuptest();">

            <label>管理者ID</label>
            <input type="text" name="manager_id" id="manager_id" class="signup_text" placeholder="7桁以上10桁以内の数字" required>
            <div id="error-message-id" class="err_msg"></div>

            <label>パスワード</label>
            <input type="password" name="manager_password" id="manager_password" class="signup_text" placeholder="大文字、小文字、数字をそれぞれ1つ以上含む8文字以上" required>
            <div id="error-message-pass" class="err_msg"></div>

            <label>管理者名</label>
            <input type="text" name="manager_name" id="manager_name" class="signup_text" placeholder="山田　太郎" required>
            <br><br>

            <input type=submit value="作成" class="manager_button"><br>
            <a href="login.php">ログイン画面に戻る</a>

        </form>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>