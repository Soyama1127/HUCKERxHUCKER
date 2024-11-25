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
    <header>
        <button class='back-btn' onclick="location.href='pr.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
        <form action="destroy_gamesoya" method="post">
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = $pdo->prepare('select * from game where game_id=?');
        $sql->execute([$_SESSION['game_id']]);
        foreach ($sql as $row):?> 
            <h2><?=$row['game_name']?> </h2><br>
            
         <?php endforeach ?>
    <label>PR文</label><br> 
    <textarea name=pr_content rows="5" cols="40" required></textarea>
    <label>サンプル画像</label><br>
    <input type="file" name="pr_movie"　enctype="multipart/form-data" required><br>
    <input type=submit value="申請" ><br>
        </form>
    </main>
</body>

</html>