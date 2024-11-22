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
    <header>
        <button class='back-btn' onclick="location.href='game.php'"><img src='./../img/backbutton.png'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
        <button class="pr_request_btn" onclick="location.href='pr_request'">PRを作成</button>
    </header>
    <main>
        <h1>ユーザーPR</h1>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $_POST['game_id'];
        $sql = $pdo->prepare('select * from userpr inner join user on user.user_id = userpr.user_id where user_id=?');
        $sql->execute([$_SESSION['user_id']]);
        foreach ($sql as $row):?> 
           <?=$row['pr_crip']?> <br>
           <?=$row['user_name']?><br>
           <?=$row['pr_content']?><br>
        <?php endforeach ?>

    </main>
</body>

</html>