<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ユーザーPR</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='game.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
        <form action="pr_request.php" class="pr_form">
            <button type="submit" class="pr_btn">PRを作成</button>
        </form>
    </header>
    <main class="pr_main">
        <div class="pr_container">
            <h1 class="login_label">ユーザーPR</h1>
            <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $sql = $pdo->prepare('select * from userpr inner join user on user.user_id = userpr.user_id where userpr.game_id = ? and userpr.pr_approval=1');
            $sql->execute([$_SESSION['game_id']]);
            $row_count = $sql->rowCount();
            if (!$row_count) {
                echo '<h1>このゲームのユーザーPRはありません。<h1>';
            }
            foreach ($sql as $row): ?>
                <div class="pr_area">
                    <img src="./../manager/pr_movie/<?=$row['pr_clip']?>" class="pr_clip">
                    <div class="pr_detail">
                        投稿者：<?= $row['user_name'] ?><br>
                        PRポイント：<br><?= $row['pr_content'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>