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
    <?
    $pdo = new PDO(
                    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;',
                    'LAA1553864',
                    'Pass1127'
                );
                ?>
    <table >
        
        <tbody>
            <tr>

                <td><?=$pdo->query('SELECT game_id FROM game where ?')?></td>
                <td><?=$pdo->query('SELECT game_name FROM game where ?')?></td>
                <td><?=$pdo->query('SELECT game_genre FROM game where ?')?></td>
                <td><?=$pdo->query('SELECT game_model FROM game where ?')?></td>
                <td><?=$pdo->query('SELECT game_price FROM game where ?')?></td>
                <?=$sql->execute($POST['game_id'])?>
            </tr>
                
                
        </tbody>
    </table>
            <form action=game_stock_add_complete>
            <input type=number name=add method=post>
            <input type=submit value="補充" class="manager_button"><br>
            </form>
    <script src="./../js/script.js"></script>
<form action="game_stock_add.php" method="post"><input type="submit" name="1" value="補充"></form>
</body>

</html>