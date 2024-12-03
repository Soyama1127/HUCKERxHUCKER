<?php
session_start();
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>PR認証</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='home.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>

    <main class="gameadd_main">
        <div class="usepr_container">
            <div class="login_h1">
                <h1>ユーザーPR認証</h1>
            </div>
            <table border="1" class="tablesorter">
                <thead>
                    <tr>
                        <th>PRID</th>
                        <th>ゲーム名</th>
                        <th>ユーザー名</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
                    $sql = $pdo->prepare('select * from userpr where pr_approval is null');
                    $sql->execute();
                    foreach ($sql as $row): ?>
                        <?php
                        $user_name_sql = $pdo->prepare('select user.user_name as user_name from user inner join userpr on user.user_id = userpr.user_id where user.user_id = ?');
                        $user_name_sql->execute([$row['user_id']]);
                        foreach ($user_name_sql as $row_user) {
                            $user_name = $row_user['user_name'];
                        }
                        $game_name_sql = $pdo->prepare('select game.game_name as game_name from game inner join userpr on game.game_id = userpr.game_id where game.game_id = ?');
                        $game_name_sql->execute([$row['game_id']]);
                        foreach ($game_name_sql as $row_game) {
                            $game_name = $row_game['game_name'];
                        }
                        ?>
                        <tr>
                            <td><?= $row['pr_id'] ?></td>
                            <td><?= $game_name ?></td>
                            <td><?= $user_name ?></td>
                            <td>
                                <form action="pr_check.php" method="post">
                                    <input type="hidden" value="<?= $row['pr_id'] ?>" name="pr_id">
                                    <input type="hidden" value="<?= $user_name ?>" name="user_name">
                                    <input type="hidden" value="<?= $game_name ?>" name="game_name">
                                    <input type=submit name=agree value="詳細">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>