<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者ホーム</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>

    <h1>ホーム</h1>

    <form action="login.php" method="post" class="logout">

        <input type="submit" value="ログアウト" class="logout_button">

    </form>

    <form action="game_add.php" method="post">

        <input type="submit" value="商品登録" class="home_button">

    </form>

    <form action="game_update.php" method="post">

        <input type="submit" value="商品更新" class="home_button">

    </form>

    <form action="game_delete.php" method="post">

        <input type="submit" value="商品削除" class="home_button">

    </form>

    <form action="user_delete.php" method="post">

        <input type="submit" value="ユーザー削除" class="home_button">

    </form>

    <form action="pr_approval.php" method="post">

        <input type="submit" value="ユーザーPR" class="home_button">

    </form>

    <form action="game_stock_add.php" method="post">

        <input type="submit" value="在庫管理" class="home_button">

    </form>
</body>

</html>