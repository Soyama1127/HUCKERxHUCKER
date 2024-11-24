<?php
session_start();
$_SESSION['address_root'] = 0;
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <title>レジ</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="backPage()"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' class="gamesoya_logo">
    </header>
    <main class="buy_main">
        <h1 class="login_label">レジ</h1>
        <?php
        if (isset($_POST['only_buy'])) {
            $sql = $pdo->prepare('select game_price from game where game_id = ?');
            $sql->execute([$_SESSION['game_id']]);
            foreach ($sql as $row) {
                $_SESSION['price'] =  $row['game_price'];
                $pageroot = 0;
            }
        } else if (isset($_POST['cart_buy'])) {
            $sql = $pdo->prepare('select sum(game.game_price) as allgame from game inner join cart on game.game_id = cart.game_id where cart_id = ?');
            $sql->execute([$_SESSION['user_id']]);
            foreach ($sql as $row) {
                $_SESSION['price'] = $row['allgame'];
                $pageroot = 1;
            }
        }
        ?>
        <label>請求金額</label>
        <h1 class="game_price">￥<?= $_SESSION['price'] ?></h1>
        <label>住所</label>
        <form action="address.php" class="address_update" onclick="updateNumber(6);updaterootNumber(<?= $pageroot ?>);">
            <button typw="submit" class="btn btn-primary">住所変更</button>
        </form>
        <?php
        $sql = $pdo->prepare('select concat (last_name,first_name,"(",last_namekana,first_namekana,")") as fullname, post_code, concat(state,city,house_number," ",house) as address FROM user where user_id = ?');
        $sql->execute([$_SESSION['user_id']]);
        $fullname = '';
        $postcode = '';
        $address = '';
        foreach ($sql as $row) {
            if ($row['post_code']) {
                $fullname = $row['fullname'];
                $postcode = $row['post_code'];
                $address = $row['address'];
            }
        }
        ?>
        <div class="address">
            <?= $fullname ?><br>
            <?= $postcode ?><br>
            <?= $address ?>
        </div><br>
        <div class="pay">
            <label>お支払方法</label>
            <select>
                <option></option>
                <option>PayPay</option>
                <option>クレジットカード</option>
                <option>コンビニ払い</option>
            </select>
        </div><br><br>
        <form action="buy_complete.php" method="post">
            <input type='hidden' name='onlyorcart' value='<?=$pageroot?>'>
            <input type="submit" method="post" value="購入" class="buy">
        </form>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>