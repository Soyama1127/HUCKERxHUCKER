<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品削除</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
    <?php
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    echo '<h1>商品削除</h1>';
    echo '<form action="game_delete_complete.php" method="post">';
    echo 'ID<br>';
    echo '<input type=text name=game_id><br>';
    echo 'ゲーム一覧<br>';
    $sql = $pdo->query('select  * from game');
    $sql->execute();
    foreach ($sql as $row){
        echo '<p>';
        echo $row['game_id'];
        echo $row['game_name'];
        echo $row['geme_price'];
        echo $row['game_model'];
        echo $row['game_genre'];
        echo $row['geme_stock'];
        echo '</p>';
    }
    echo '<input type="submit" value="削除" class="manager_button">';
    ?>
    </form>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>