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
        GAMESOYA管理者
    </header>
    <main>
    <form action="signup_complete.php" method="post">
        <h3>管理者登録</h3>
        ID<br>
        <input type=text name=manager_id><br>
        パスワード<br>
        <input type=text name=manager_password><br>
        管理者名<br>
        <input type=text name=manager_name><br>
        <input type=submit value=作成>
    </form>
    </main>
</body>

</html>