<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>管理者ホーム</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>

    <h1>ホーム</h1>

    <form action="login.php" method="post" class="logout" onsubmit="return confirmLogout();">

        <input type="submit" value="ログアウト" class="logout_button">

    </form>
    <br><br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5 mt-5">

        <!-- 商品登録ボタン -->
        <div class="col">
            <form action="game_add.php" method="post">
                <input type="submit" value="商品登録" class="home_button">
            </form>
        </div>

        <!-- 商品更新ボタン -->
        <div class="col">
            <form action="all_game.php" method="post">
                <input type="submit" value="商品更新" class="home_button">
            </form>
        </div>

        <!-- 商品削除ボタン -->
        <div class="col">
            <form action="game_delete.php" method="post">
                <input type="submit" value="商品削除" class="home_button">
            </form>
        </div>

        <!-- ユーザー削除ボタン -->
        <div class="col">
            <form action="user_delete.php" method="post">
                <input type="submit" value="ユーザー削除" class="home_button">
            </form>
        </div>

        <!-- ユーザーPRボタン -->
        <div class="col">
            <form action="pr_approval.php" method="post">
                <input type="submit" value="ユーザーPR" class="home_button">
            </form>
        </div>

        <!-- 在庫管理ボタン -->
        <div class="col">
            <form action="game_stock.php" method="post">
                <input type="submit" value="在庫管理" class="home_button">
            </form>
        </div>
    </div>
    <script src="./../js/manager.js"></script>
</body>

</html>