<?php
session_start();
$_SESSION['user_id'] = session_id();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <script src="./../js/user.js"></script>
    <title>ユーザーログイン</title>
</head>

<body>
    <main>

        <img height="80px" src="./../img/GAMESoya.PNG"><br><br>

        <form id="login" action="home.php" method="post" onsubmit="return logintest();">

            <label class="login_label">Login</label><br>

            <label>ログインID</label><br>
            <input type="text" name="login_id" id="login_id" class="user_text" required><br>

            <label>パスワード</label><br>
            <input type="password" name="pass" id="pass" class="user_text" required><br><br>

            <div id="error-message" class="err_msg"></div>
            <input type="submit" value="ログイン" class="user_button"><br>

            <a href="home.php" class="user_link">ゲストとしてログイン</a><br>

        </form>
        <form action="signup.php" method="post">

            <input type="submit" value="新規登録" class="user_button">
            
        </form>
    </main>
</body>

</html>