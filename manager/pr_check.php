<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>PR承認画面</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='pr_approval.php'"><img src='./../img/backbutton.png'></button>
        GAMESoya管理者
    </header>
    <main class="gameadd_main">
        <div class="user_pr_container">
            <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $pr_id = $_POST['pr_id'];
            $user_name = $_POST['user_name'];
            $game_name = $_POST['game_name'];
            $sql = $pdo->prepare('select * from userpr where pr_id = ?');
            $sql->execute([$pr_id]);
            foreach ($sql as $row): ?>
                <h2><?= $user_name ?>さん</h2>
                <h2><?= $game_name ?></h2>
                <img src="pr_movie/<?= $row['pr_clip'] ?>" class="pr_clip"><br><br>
                <fieldset>
                    <?= $row['pr_content'] ?>
                </fieldset><br><br>
                <div class="approval_btn_area">
                    <form action="pr_disagree.php" method="post" class="approval_form">
                        <input type="hidden" value="<?= $pr_id ?>" name="pr_id">
                        <input type="submit" class="disagree_btn" value="却下">
                    </form>
                    <form action="pr_agree.php" method="post" class="approval_form">
                        <input type="hidden" value="<?= $pr_id ?>" name="pr_id">
                        <input type="submit" class="agree_btn" value="承認">
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>