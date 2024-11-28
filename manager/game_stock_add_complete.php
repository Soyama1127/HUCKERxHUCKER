<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>在庫補充完了</title>
</head>

<body>
    <header class="login_header">
        GAMESoya管理者
    </header>
    <main class="complete_main">
        <div class="complete_container">
            <h1>在庫を補充しました</h1>
            <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $game_id = $_POST['game_id'];
            $add = $_POST['add'];
            $sql = $pdo->prepare('select game_stock from game where game_id = ?');
            $sql->execute([$game_id]);
            foreach ($sql as $row) {
                $stock = $row['game_stock'] + $add;
            }
            $sql = $pdo->prepare('update  game  set  game_stock = ? where game_id = ?');
            $sql->execute([$stock, $game_id]);
            ?>
            <div class="complete_btn_area">
                <form action="game_stock.php" method="post" class="complete_form">
                    <input name="1" type="submit" value="続けて補充" class="manager_btn">
                </form>
                <form action="home.php" method="post" class="complete_form">
                    <input name="2" type="submit" value="ホームに戻る" class="manager_btn">
                </form>
            </div>
        </div>
    </main>

</body>

</html>