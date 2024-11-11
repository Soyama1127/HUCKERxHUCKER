<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品削除完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $game_id = $_POST['game_id'];
        $sql = $pdo->prepare('delete from game where game_id = ?');
        $result = $sql->execute([$game_id]);
        ?>
        <p><h1>商品を削除しました</h1></p>
        <form action="game_delete.php" method="post">
            <input type=submit value="続けて削除" class="manager_button">
        </form>
        <form action="home.php" method="post">
            <input type=submit value="ホームに戻る" class="manager_button">
        </form>
    </main>
</body>

</html>