<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>PR申請</title>
</head>

<body>
    <header class="logoback_header">
        <button class='back-btn' onclick="location.href='pr.php'"><img src='./../img/backbutton.png'></button>
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main class="pr_request_main">
        <form action="destroy_gamesoya" method="post" enctype="multipart/form-data" class="request_form" onsubmit="return confirmRequest()">
            <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $sql = $pdo->prepare('select * from game where game_id=?');
            $sql->execute([$_SESSION['game_id']]);
            foreach ($sql as $row): ?>
                <h2 class="request_h2"><?= $row['game_name'] ?> </h2><br>
            <?php endforeach ?>
            <label>PR文</label>
            <textarea name=pr_content rows="5" cols="40" class="pr_content" required></textarea>
            <label>サンプル画像/動画</label>
            <input type="file" name="pr_movie" class="pr_movie" required><br>
            <div class="request_btn_area">
                <input type=submit value="申請する" class="request_btn">
            </div>
        </form>
    </main>
</body>

</html>