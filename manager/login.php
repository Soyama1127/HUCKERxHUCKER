<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者ログイン</title>
</head>

<body>
    <header class="login_header">
        GAMESoya管理者
    </header>
    <main class="login_main">
        <div class="login_container">
            <div class="login_h1">
                <h1>管理者ログイン</h1>
            </div>
            <form id="login" action="home.php" method="post" onsubmit="return logintest();">

                <label>管理者ID</label><br>
                <input type="text" name="manager_id" id="manager_id" class="login_text" required><br>

                <label>パスワード</label><br>
                <input type="password" name="manager_pass" id="manager_pass" class="login_text" required><br>

                <div id="error-message-log" class="err_msg"></div>
                <div class="manager_btn_area">
                    <input type="submit" value="ログインする" class="manager_btn">
                </div>
            </form>

            <form action="signup.php" method="post">
                <div class="manager_btn_area">
                    <input type="submit" value="新規登録" class="manager_btn">
                </div>
            </form>
        </div>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>