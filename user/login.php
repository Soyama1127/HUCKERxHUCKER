<?php
session_start();
function generateRandomString($length = 16) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $randomString;
}
$_SESSION['user_id'] = generateRandomString(16);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ユーザーログイン</title>
</head>

<body>
    <header class="login_header">
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="login_main">
        <label class="login_label">Login</label><br>

        <form id="login" action="home.php" method="post" onsubmit="return logintest();" class="login_form">

            <label>ログインID</label>
            <input type="text" name="login_id" id="login_id" class="user_text" required><br>

            <label>パスワード</label>
            <input type="password" name="pass" id="pass" class="user_text" required><br><br>

            <div id="error-message" class="err_msg"></div>
            <input type="submit" value="ログイン" class="user_button"><br><br>

            <a href="home.php" class="user_link">ゲストとしてログイン</a><br><br>

        </form>
        <form action="signup.php" method="post" class="login_form">

            <input type="submit" value="新規登録" class="user_button">

        </form>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>