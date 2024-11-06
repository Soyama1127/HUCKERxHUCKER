<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品登録完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        
        <h1>登録完了しました</h1>
        <?php
             $name = $_POST['game_name'];
             $price = $_POST['game_price'];
             $model = $_POST['model'];
             $genre= $_POSR['genre'];
             $image= $_POST['image'];
             $sample1=$_POST['sample1'];
             $sample2=$_POST['sample2'];  
             $sample3=$_POST['sample3']; 
             $summary=$_POST['summary'];     
     
             $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
             $sql = $pdo->prepare('insert into manager(game_name,geme_price,game_model,game_genre,geme_image,game_sample1,geme_sample2,game_sample3,game_summary) values(?,?,?,?,?,?,?,?,?)');
             $sql->execute([$name, $price, $model,$genre,$image,$sample1,$sample2,$sample3,$summary]);
        ?>
        <form action="game_add.php" method="post">
        <input type=submit value="続けて登録" class="manager_button">
        <form action="home.php" method="post">
        <input type=submit value="ホーム画面に戻る" class="manager_button">
    </main>
</body>

</html>