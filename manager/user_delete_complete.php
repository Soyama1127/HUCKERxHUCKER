<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>ユーザー削除完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <h1>ユーザーを削除しました</h1>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $game_id = $_POST['user_id'];
        $sql = $pdo->prepare('delete from user where user_id = ?');
        $result = $sql->execute([$user_id]);
        ?>
        <form action="user_delete.php" method="post">
            <input type=submit value="続けて削除" class="manager_button">
        </form>
        <form action="home.php" method="post">
            <input type=submit value="ホームに戻る" class="manager_button">
        </form>
    </main>
    <form action="user_delete.php" method="post"><input name="1" type="submit" value="続けて削除"style="width:300px;height:50px"></form>
    <form action="home.php" method="post"><input name="2" type="submit" value="ホームに戻る"style="width:300px;height:50px"></form>
</body>

</html>