<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>PR申請</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='pr.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <?php
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = $pdo->prepare('select game_name from game where game_id=?');
        $sql->execute([$_SESSION['game_id']]);
        ?>
    <label>PR文</label><br>
    <textarea name=prcontent rows="5" cols="40" required></textarea>
    <label>サンプル画像</label><br>
    <input type="file" name="pr_movie" required><br>
    <input type=submit value="申請" ><br>
    </main>
</body>

</html>