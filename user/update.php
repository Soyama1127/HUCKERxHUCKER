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
        パスワード/ログインID
    </header>
    <main>
        パスワードの変更<br><br>
        <label>現在のパスワード</label><br>
        <input type="text"><br>
        <label>新しいパスワード</label><br>
        <input type="text" id="newpass"><br>
        <label>新しいパスワード(確認)</label><br>
        <input type="text" id="newpass1"><br>
        <div id="error-message"></div>
        <input type="submit" value="変更" onclick="kakunin();">
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>