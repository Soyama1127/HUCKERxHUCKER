<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>ユーザー削除</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <div class="login_h1">
        <h1>ユーザー削除</h1>
    </div>
    <main class="game_choose_main">
        <div class="game_choose_container">
            <table class="tablesorter">
                <thead>
                    <tr>
                        <th>ユーザーID</th>
                        <th>ユーザー名</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
                    $sql = $pdo->query('select * from user');
                    $sql->execute();
                    foreach ($sql as $row): ?>
                        <tr>
                            <form action="user_delete_complete.php" method="post" onsubmit="return confirmUserDelete();">
                                <td> <?= $row['user_id'] ?></td>
                                <td><?= $row['user_name'] ?></td>
                                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                <td><input type="submit" value="削除"></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>