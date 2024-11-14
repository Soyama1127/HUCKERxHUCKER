<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>アカウント</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick='window.history.back();'>＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <?php
        $sql = $pdo->prepare('select * from user where login_id = ?');
        $sql->execute([$_SESSION['login_id']]);
        foreach ($sql as $row): ?>
        <?php endforeach; ?>
    </main>
</body>

</html>