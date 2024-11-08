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
<<<<<<< HEAD
    <h1>管理者画面</h1>
    <form action="login.php" method="post"><input name="0"value="ログアウト"></form>
    <form action="game_add.php" method="post"><input name="a" type="submit" value="商品登録"style="width:300px;height:50px"></form>
    <form action="game_update.php" method="post"><input name="b" type="submit" value="商品更新"style="width:300px;height:50px"></form>
    <form action="game_delete.php" method="post"><input name="c" type="submit" value="商品削除"style="width:300px;height:50px"></form>
    <form action="user_delete.php" method="post"><input name="d" type="submit" value="ユーザー削除"style="width:300px;height:50px"></form>
    <form action="pr_approval.php" method="post"><input name="e" type="submit" value="ユーザーPR"style="width:300px;height:50px"></form>
    <form action="game_stock.php" method="post"><input name="f" type="submit" value="在庫管理"style="width:300px;height:50px"></form>
</body>
</html>
=======
>>>>>>> 15be628d4b600f252fa5b8aacc6dbb323d0e5bfb

    <h1>ホーム</h1>

    <form action="login.php" method="post" class="logout">

        <input type="submit" value="ログアウト" class="logout_button">

    </form>
    <br><br><br>
    <div class="row mt-5">
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="game_add.php" method="post">

                <input type="submit" value="商品登録" class="home_button">

            </form>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="game_update.php" method="post">

                <input type="submit" value="商品更新" class="home_button">

            </form>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="game_delete.php" method="post">

                <input type="submit" value="商品削除" class="home_button">

            </form>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="user_delete.php" method="post">

                <input type="submit" value="ユーザー削除" class="home_button">

            </form>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="pr_approval.php" method="post">

                <input type="submit" value="ユーザーPR" class="home_button">

            </form>
        </div>

        <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
            <form action="game_stock_add.php" method="post">

                <input type="submit" value="在庫管理" class="home_button">

            </form>
        </div>
    </div>
</body>

</html>