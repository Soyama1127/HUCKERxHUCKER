<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../js/script.js">
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
            <input type="text" name="manager_id" id="manager_id" class="signup_text" required>
            <div id="error-message-id" class="err_msg"></div>
            <label>パスワード</label>
            <input type="password" name="manager_password" id="manager_password" class="signup_text" required>
            <div id="error-message-pass" class="err_msg"></div>
            <label>管理者名</label>
            <input type="text" name="manager_name" id="manager_name" class="signup_text" required><br><br>
            <div id="error-message-all" class="err_msg"></div>
            <input type=submit value="作成" class="manager_button">
        </form>
    </main>
    <script src="./../js/script.js"></script>
</body>

</html>