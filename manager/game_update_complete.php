<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>商品更新完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $id = $_POST['game_id'];
        $name = $_POST['game_name'];
        $price = $_POST['game_price'];
        $model = $_POST['model'];
        $genre = $_POST['game_genre'];
        $summary = $_POST['summary'];

        // アイコンが変更有
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $image_path = './../manager/game/' . basename($_FILES['image']['name']);
            // サンプル１変更有
            if (is_uploaded_file($_FILES['sample1']['tmp_name'])) {
                $sample1_path = './../manager/game/' . basename($_FILES['sample1']['name']);
                // サンプル２変更有
                if (is_uploaded_file($_FILES['sample2']['tmp_name'])) {
                    $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
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
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $image = basename($_FILES['image']['name']);
                        $sample1 = basename($_FILES['sample1']['name']);
                        $sample2 = basename($_FILES['sample2']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                    // サンプル２変更無
                } else {
                    $sample2 = $_POST['original_game_sample2'];
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $image = basename($_FILES['image']['name']);
                        $sample1 = basename($_FILES['sample1']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $image = basename($_FILES['image']['name']);
                        $sample1 = basename($_FILES['sample1']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                }
                // サンプル１変更無
            } else {
                $sample1 = $_POST['original_game_sample1'];
                // サンプル２変更有
                if (is_uploaded_file($_FILES['sample2']['tmp_name'])) {
                    $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $image = basename($_FILES['image']['name']);
                        $sample2 = basename($_FILES['sample2']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $image = basename($_FILES['image']['name']);
                        $sample2 = basename($_FILES['sample2']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                    // サンプル２変更無
                } else {
                    $sample2 = $_POST['original_game_sample2'];
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $image = basename($_FILES['image']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $image = basename($_FILES['image']['name']);

                        if (
                            move_uploaded_file($_FILES['image']['tmp_name'], $image_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                }
            }
            // アイコンの変更なし
        } else {
            $image = $_POST['original_game_icon'];
            // サンプル１変更有
            if (is_uploaded_file($_FILES['sample1']['tmp_name'])) {
                $sample1_path = './../manager/game/' . basename($_FILES['sample1']['name']);
                // サンプル２変更有
                if (is_uploaded_file($_FILES['sample2']['tmp_name'])) {
                    $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $sample1 = basename($_FILES['sample1']['name']);
                        $sample2 = basename($_FILES['sample2']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $sample1 = basename($_FILES['sample1']['name']);
                        $sample2 = basename($_FILES['sample2']['name']);

                        if (
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                    // サンプル２変更無
                } else {
                    $sample2 = $_POST['original_game_sample2'];
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $sample1 = basename($_FILES['sample1']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $sample1 = basename($_FILES['sample1']['name']);

                        if (
                            move_uploaded_file($_FILES['sample1']['tmp_name'], $sample1_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                }
                // サンプル１変更無
            } else {
                $sample1 = $_POST['original_game_sample1'];
                // サンプル２変更有
                if (is_uploaded_file($_FILES['sample2']['tmp_name'])) {
                    $sample2_path = './../manager/game/' . basename($_FILES['sample2']['name']);
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $sample2 = basename($_FILES['sample2']['name']);
                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path) and
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];

                        $sample2 = basename($_FILES['sample2']['name']);

                        if (
                            move_uploaded_file($_FILES['sample2']['tmp_name'], $sample2_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                    }
                    // サンプル２変更無
                } else {
                    $sample2 = $_POST['original_game_sample2'];
                    // サンプル３変更有
                    if (is_uploaded_file($_FILES['sample3']['tmp_name'])) {
                        $sample3_path = './../manager/game/' . basename($_FILES['sample3']['name']);

                        $sample3 = basename($_FILES['sample3']['name']);

                        if (
                            move_uploaded_file($_FILES['sample3']['tmp_name'], $sample3_path)
                        ) {
                            $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                            $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        } else {
                            echo 'ファイルの移動中にエラーが発生';
                        }
                        // サンプル３変更無
                    } else {
                        $sample3 = $_POST['original_game_sample3'];
                        $sql = $pdo->prepare('update game set game_name = ?, game_price = ?, game_model = ?, game_genre = ?, game_icon = ?, game_sample1 = ?, game_sample2 = ?, game_sample3 = ?, game_summary = ? where game_id = ?');
                        $sql->execute([$name, $price, $model, $genre, $image, $sample1, $sample2, $sample3, $summary, $id]);
                        echo 'ファイルの移動中にエラーが発生';
                    }
                }
            }
        }
        ?>
    </main>
    <h1>商品を更新しました</h1>
    <form action="game_update.php" method="post">
        <input type="submit" value="続けて更新">
    </form>
    <form action="home.php" method="post">
        <input type="submit" value="ホームに戻る">
    </form>
</body>

</html>