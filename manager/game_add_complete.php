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
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $name = $_POST['game_name'];
        $price = $_POST['game_price'];
        $model = $_POST['model'];
        $genre = $_POST['game_genre'];
        $summary = $_POST['summary'];

        if (is_uploaded_file($_FILES['image']['tmp_name']) and
            is_uploaded_file($_FILES['sample1']['tmp_name']) and
            is_uploaded_file($_FILES['sample2']['tmp_name']) and
            is_uploaded_file($_FILES['sample3']['tmp_name'])
        ) {
            if (!file_exists('game')) {
                mkdir('game');
            }
            $image = 'game/' . basename($_FILES['image']['name']);
            $sample1 = 'game/' . basename($_FILES['sample1']['name']);
            $sample2 = 'game/' . basename($_FILES['sample2']['name']);
            $sample3 = 'game/' . basename($_FILES['sample3']['name']);

            if (
                move_uploaded_file($_FILES['image']['tmp_name'], $image) and
                move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1) and
                move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2) and
                move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3)
            ) {

                $sql = $pdo->prepare('insert into game(game_name,game_price,game_model,game_genre,game_icon,game_sample1,game_sample2,game_sample3,game_summary) values(?,?,?,?,?,?,?,?,?)');
                $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary]);

                echo '商品を登録しました';
            } else {
                echo '!CAUTION CAUTION!';
            }
        } else {
            echo 'アップロードできませんでした';
        }
        ?>
        <form action="game_add.php" method="post">
            <input type=submit value="続けて登録" class="manager_button">
            <form action="home.php" method="post">
                <input type=submit value="ホーム画面に戻る" class="manager_button">
    </main>
</body>

</html>