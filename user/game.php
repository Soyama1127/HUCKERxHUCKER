<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>ゲーム詳細</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick='window.history.back();'>＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
        
    </header>
    <main>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $sql = $pdo->prepare('select * from game where game_id = 4');
        $sql->execute();
        foreach($sql as $row){
            echo "<img  width='1000px' height='500px' src=./../manager/", $row['game_sample1'], " alt='画像'>";
        }
        ?>
    </main>
</body>

</html>