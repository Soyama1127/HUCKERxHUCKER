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
        GAMESoya管理者
    </header>
    <main>

        <h1>商品を登録しました</h1>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $name = $_POST['game_name'];
        $price = $_POST['game_price'];
        $model = $_POST['model'];
        $genre = $_POST['game_genre'];
        $summary = $_POST['summary'];

        if (
            is_uploaded_file($_FILES['image']['tmp_name']) and
            is_uploaded_file($_FILES['sample1']['tmp_name']) and
            is_uploaded_file($_FILES['sample2']['tmp_name']) and
            is_uploaded_file($_FILES['sample3']['tmp_name'])
        ) {
            
            $image_path = './../manager/game/' . basename($_FILES['image']['name']);
            $sample1_path = './../manager/game/' . basename($_FILES['sample1']['name']);
            $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
            $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

            $image = basename($_FILES['image']['name']);
            $sample1 = basename($_FILES['sample1']['name']);
            $sample2 = basename($_FILES['sample2']['name']);
            $sample3 = basename($_FILES['sample3']['name']);

            if (
                move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path) and
                move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
            ) {

                $sql = $pdo->prepare('insert into game(game_name,game_price,game_model,game_genre,game_icon,game_sample1,game_sample2,game_sample3,game_summary) values(?,?,?,?,?,?,?,?,?)');
                $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary]);

            } else {
                echo 'ファイルの移動中にエラーが発生';
            }
        } else {
            echo 'アップロードできませんでした';
        }
        ?>
        <form action="game_add.php" method="post">
            <input type=submit value="続けて登録" class="manager_button">
        </form>
        <form action="home.php" method="post">
            <input type=submit value="ホーム画面に戻る" class="manager_button">
        </form>

    </main>
</body>

</html>