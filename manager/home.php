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
    <h1>管理者画面</h1>
    <form action="login.php" method="post"><input name="0"value="ログアウト"></form>
    <form action="game_add.php" method="post"><input name="a" type="submit" value="商品登録"style="width:300px;height:50px"></form>
    <form action="game_update.php" method="post"><input name="b" type="submit" value="商品更新"style="width:300px;height:50px"></form>
    <form action="game_delete.php" method="post"><input name="c" type="submit" value="商品削除"style="width:300px;height:50px"></form>
    <form action="user_delete.php" method="post"><input name="d" type="submit" value="ユーザー削除"style="width:300px;height:50px"></form>
    <form action="pr_approval.php" method="post"><input name="e" type="submit" value="ユーザーPR"style="width:300px;height:50px"></form>
    <form action="game_stock_add.php" method="post"><input name="f" type="submit" value="在庫管理"style="width:300px;height:50px"></form>
</body>
</html>

