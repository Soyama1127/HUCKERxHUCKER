<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品更新完了</title>
</head>

<body>
    <header class="login_header">
        GAMESoya管理者
    </header>
    <main class="complete_main">
        <div class="complete_container">
            <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            $id = $_POST['game_id'];
            $name = $_POST['game_name'];
            $price = $_POST['game_price'];
            $model = $_POST['model'];
            $genre = $_POST['game_genre'];
            $summary = $_POST['summary'];

            $image = $_POST['original_game_icon'];

            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                $image_path = './../manager/game/' . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
                    $image = basename($_FILES['image']['name']);
                } else {
                    echo '画像の移動中にエラーが発生しました。';
                    exit;
                }
            }

            // サンプル画像1
            $sample1 = $_POST['original_game_sample1'];
            if (is_uploaded_file($_FILES['sample1']['tmp_name'])) {
                $sample1_path = './../manager/game/' . basename($_FILES['sample1']['name']);
                if (move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path)) {
                    $sample1 = basename($_FILES['sample1']['name']);
                } else {
                    echo 'サンプル1の移動中にエラーが発生しました。';
                    exit;
                }
            }

            // サンプル画像2
            $sample2 = $_POST['original_game_sample2'];
            if (is_uploaded_file($_FILES['sample2']['tmp_name'])) {
                $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
                if (move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path)) {
                    $sample2 = basename($_FILES['sample2']['name']);
                } else {
                    echo 'サンプル2の移動中にエラーが発生しました。';
                    exit;
                }
            }

            // サンプル画像3
            $sample3 = $_POST['original_game_sample3'];
            if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);
                if (move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)) {
                    $sample3 = basename($_FILES['sample3']['name']);
                } else {
                    echo 'サンプル3の移動中にエラーが発生しました。';
                    exit;
                }
            }

            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? WHERE game_id = ?');
            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
            ?>
            <h1>商品を更新しました</h1>
            <div class="complete_btn_area">
                <form action="game_choose.php" method="post" class="complete_form">
                    <input type="submit" value="続けて更新" class="manager_btn">
                </form>
                <form action="home.php" method="post" class="complete_form">
                    <input type="submit" value="ホームに戻る" class="manager_btn">
                </form>
            </div>
        </div>
    </main>
</body>

</html>