<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫補充完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <h1>在庫を補充しました</h1>
        <?php
        $pdo = new PDO(
                    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;',
                    'LAA1553864',
                    'Pass1127'
                );
                $game_id = $_POST['game_id'];
                $add=$_POST['add'];
                $sql = $pdo->prepare('updata gamesoya  set  game_stock=? where game_id = ?');
                $sql->execute([$add,$game_id]);
                ?>
                <form action="game_stock.php" method="post">
                    <input name="1" type="submit" value="続けて補充"style="width:300px;height:50px">
                </form>
                <form action="home.php" method="post">
                    <input name="2" type="submit" value="ホームに戻る"style="width:300px;height:50px">
                </form>
    </main>
    
</body>

</html>