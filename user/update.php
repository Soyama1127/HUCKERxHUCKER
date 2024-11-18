<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>パスワード・ログインID更新</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick='window.history.back();'>＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <p>パスワードの変更</p><br>
        <label>現在のパスワード</label><br>
        <input type="password" class="user_text" required><br>
        <label>新しいパスワード</label><br>
        <input type="password" id="newpass" class="user_text" required><br>
        <label>新しいパスワード(確認)</label><br>
        <input type="password" id="newpass1" class="user_text" required><br>
        <div id="error-message"></div>
        <input type="submit" name="passupdate" value="変更" class="account_update" onclick="kakunin();"><br>

        <hr>

        <p>ログインIDの変更</p><br>
        <label>現在のログインID</label><br>
        <input type="text" class="user_text" required><br>
        <label>新しいログインID</label><br>
        <input type="text" id="newpass" class="user_text" required><br>
        <label>新しいログインID(確認)</label><br>
        <input type="text" id="newpass1" class="user_text" required><br>
        <div id="error-message"></div>
        <input type="submit" name="passupdate" value="変更" class="account_update" onclick="kakunin();">
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>