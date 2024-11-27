<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ユーザー登録</title>
</head>

<body>
    <header class="signup_header">
        <button class='back-btn' onclick="location.href='login.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="signup_main">
        
        <form id="signup" action="signup_complete.php" method="post" class="signup_form" onsubmit="return signuptest();">

            <label class="login_label">新規登録</label><br>

            <label>ユーザー名</label>
            <input type="text" name="user_name" id="user_name" class="user_text" placeholder="山田　太郎" required><br>

            <label>ログインID</label>
            <input type="text" name="login_id" id="login_id" class="user_text" placeholder="7桁以上、数字のみ" required><br>
            <div id="error-message-id" class="err_msg"></div>

            <label>パスワード</label>
            <input type="password" name="pass" id="pass" class="user_text" placeholder="大文字小文字のアルファベットと数字を1つ以上含む8文字以上" required><br>
            <div id="error-message-pass" class="err_msg"></div>

            <input type="submit" value="新規登録" class="user_button"><br>

        </form>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>