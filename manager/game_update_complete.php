<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品更新完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $name = $_POST['game_name'];
        $price = $_POST['game_price'];
        $model = $_POST['model'];
        $genre = $_POST['game_genre'];
        $summary = $_POST['summary'];
        ?>
    </main>
    <h1>商品を更新しました</h1>
    <form action="game_update.php" method="post">
        <input name="1" type="submit" value="続けて更新">
    </form>
    <form action="home.php" method="post">
        <input name="2" type="submit" value="ホームに戻る">
    </form>
</body>

</html>