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
        <form id="signup" action="signup_complete.php" method="post" onsubmit="return signuptest();">
            <h3>管理者登録</h3>
            ID<br>
            <div id="error-message-id" class="err_msg"></div>
            <input type="text" name="manager_id" id="manager_id" required><br>
            パスワード<br>
            <div id="error-message-pass" class="err_msg"></div>
            <input type="text" name="manager_password" id="manager_password" required><br>
            管理者名<br>
            <input type="text" name="manager_name" id="manager_name" required><br><br>
            <div id="error-message-all" class="err_msg"></div>
            <input type=submit value=作成>
        </form>
    </main>

    <script src="./../js/script.js"></script>
</body>

</html>