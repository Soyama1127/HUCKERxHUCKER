<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫一覧</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <h1>在庫補充</h1>
    <br>
    <br>
    <br>
    <?php
    
    $pdo = new PDO(
                    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;',
                    'LAA1553864',
                    'Pass1127'
                );
                $game_id = $_POST['game_id'];
                $sql = $pdo->prepare('select * from game where game_id = ?');
        $sql->execute([$game_id]);
        foreach ($sql as $row): ?>
            <?= $row['game_id'] ?>
            <?= $row['game_name'] ?>
            <?= $row['game_genre'] ?>
            <?= $row['game_model'] ?>
            <?= $row['game_price'] ?>
      
            <form action=game_stock_add_complete method='post'>
            <input type='hidden' name=game_id value=<?=$row['game_id']?>>
            <input type=number name=add method=post>
            <input type=submit value="補充" class="manager_button"><br>
            </form>
            <?php endforeach ?>
    <script src="./../js/manager.js"></script>
</body>

</html>