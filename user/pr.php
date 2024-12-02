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
            <?php if (isset($_SESSION['user_name'])): ?>
                <button type="submit" class="pr_btn">PRを作成</button>
            <?php else: ?>
                <button type="button" class="pr_btn" onclick="confirmLogin()">PRを作成</button>
            <?php endif; ?>
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
                <?php
                $filePath = './../manager/pr_movie/' . $row['pr_clip'];
                // ファイルタイプを判定
                $fileType = mime_content_type($filePath);
                // MIMEタイプを取得
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $fileType = finfo_file($finfo, $filePath);
                finfo_close($finfo);
                ?>
                <div class="pr_area">
                    <?php
                    if (in_array($fileType, ['image/jpeg', 'image/png', 'image/gif'])) : ?>
                        <img src="<?= $filePath ?>" class="pr_clip">
                    <?php elseif (in_array($fileType, ['video/mp4', 'video/webm', 'video/ogg'])): ?>
                        <video controls class="pr_video">
                            <source src="<?= $filePath ?>" type='video/mp4' class="pr_clip">
                        </video>
                    <?php else : ?>
                        echo "サポートされていないファイルタイプです。";
                    <?php endif; ?>
                    <div class="pr_detail">
                        投稿者：<?= $row['user_name'] ?><br>
                        PRポイント：<br><?= $row['pr_content'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
    <script src="./../js/user.js"></script>
</body>

</html>