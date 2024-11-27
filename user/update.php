<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>パスワード・ログインID更新</title>
</head>

<body>
    <header class="signup_header">
        <button class='back-btn' onclick="location.href='account_setting.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="update_main">
        <div class="update_container">
            <form action="update_pass.php" method="post" class="update_form">
                <h1 class="login_label">パスワードの変更</h1>
                <label>現在のパスワード</label><br>
                <input type="password" class="user_text" required><br>
                <label>新しいパスワード</label><br>
                <input type="password" id="user_password" name="user_password" class="user_text" required><br>
                <label>新しいパスワード(確認)</label><br>
                <input type="password" id="user_password" name="user_password" class="user_text" required><br>
                <div id="error-message"></div>
                <input type="submit" name="passupdate" value="変更" class="update_btn" onclick="kakunin();"><br>
            </form>
            <hr>
            <form action="update_id.php" method="post" class="update_form">
                <h1 class="login_label">ログインIDの変更</h1><br>
                <label>現在のログインID</label><br>
                <input type="text" class="user_text" required><br>
                <label>新しいログインID</label><br>
                <input type="text" id="user_id" name="login_id" class="user_text" required><br>
                <label>新しいログインID(確認)</label><br>
                <input type="text" id="user_id" name="login_id" class="user_text" required><br>
                <div id="error-message"></div>
                <input type="submit" name="passupdate" value="変更" class="update_btn" onclick="kakunin();">
            </form>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>