<?php
session_start();
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
    <header>
        GAMESoya管理者
    </header>
    <h1>ユーザーPR認証</h1>
    <main>
    <?php

    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $sql = $pdo->prepare('select * from userpr where approval=null');
    $sql->execute([]);
    foreach ($sql as $row): ?>
        <?= $row['pr_clip'] ?> <br>
        <?= $row['pr_content'] ?> <br>
        <?= $row['pr_clip'] ?> <br>
        <form action="pr_agree" method="post">
        <input type=submit name=agree value="承認">
        </form>
        <form action="pr_disagree" method="post">
        <input type=submit name=disagree value="却下">
        </form>
    <?php endforeach ?>
    </main>
</body>

</html>