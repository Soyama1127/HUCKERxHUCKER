<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>購入完了</title>
</head>

<body>
    <header class="login_header">
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="buy_complete_main">
        <?php
        if ($_POST['onlyorcart'] === '0') {
            $sql = $pdo->prepare('update game set game_stock = game_stock - 1 where game_id = ?');
            $sql->execute([$_SESSION['game_id']]);

            $insert = $pdo->prepare('insert into bought (game_id, user_id) values (?, ?)');
            $insert->execute([$_SESSION['game_id'], $_SESSION['user_id']]);
        } else {
            $sql = $pdo->prepare('select game_id from cart where cart_no= ?');
            $sql->execute([$_SESSION['user_id']]);
            foreach ($sql as $row) {
                $updateStock = $pdo->prepare('update game set game_stock = game_stock - 1 where game_id = ?');
                $updateStock->execute([$row['game_id']]);

                $insert = $pdo->prepare('insert into bought (game_id, user_id) values (?, ?)');
                $insert->execute([$row['game_id'], $_SESSION['user_id']]);
            }

            $deleteCart = $pdo->prepare('delete from cart where cart_no = ?');
            $deleteCart->execute([$_SESSION['user_id']]);
        }
        ?>
        <div class="buy_complete">
            <h1 class="login_label">購入が完了しました</h1>
            <button onclick="location.href='home.php'" class='back_home_btn'>ホーム画面に戻る</button>
        </div>
    </main>
</body>

</html>