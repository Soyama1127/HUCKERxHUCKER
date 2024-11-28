<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者ホーム</title>
</head>

<body>
    <header class="login_header">
        GAMESoya管理者
    </header>
    <div class="logout_container">
        <h1 class="home_h1">ホーム</h1>
        <form action="login.php" method="post" class="logout" onsubmit="return confirmLogout();" class="logout_form">
            <input type="submit" value="ログアウト" class="logout_btn">
        </form>
    </div>
    <main class="home_main">
        <div class="home_container">
            <!-- 商品登録ボタン -->
            <div class="home_btn_area">
                <form action="game_add.php" method="post" class="home_form">
                    <input type="submit" value="商品登録" class="home_button">
                </form>
            </div>
            <!-- 商品更新ボタン -->
            <div class="home_btn_area">
                <form action="game_choose.php" method="post" class="home_form">
                    <input type="submit" value="商品更新" class="home_button">
                </form>
            </div>
            <!-- 商品削除ボタン -->
            <div class="home_btn_area">
                <form action="game_delete.php" method="post" class="home_form">
                    <input type="submit" value="商品削除" class="home_button">
                </form>
            </div>
            <!-- ユーザー削除ボタン -->
            <div class="home_btn_area">
                <form action="user_delete.php" method="post" class="home_form">
                    <input type="submit" value="ユーザー削除" class="home_button">
                </form>
            </div>
            <!-- ユーザーPRボタン -->
            <div class="home_btn_area">
                <form action="pr_approval.php" method="post" class="home_form">
                    <input type="submit" value="ユーザーPR" class="home_button">
                </form>
            </div>
            <!-- 在庫管理ボタン -->
            <div class="home_btn_area">
                <form action="game_stock.php" method="post" class="home_form">
                    <input type="submit" value="在庫管理" class="home_button">
                </form>
            </div>
        </div>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>