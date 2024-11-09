<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">
    <script src="./../js/bootstrap.js"></script>
    <title>ホーム画面</title>
</head>
<?php
$pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
?>

<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src='./../img/GAMESoya.PNG' width="200px" alt="Logo">
            </div>

            <div class="right-section">
                <a href="cart.php" class="button">
                    <img src="./../img/cart.png" alt="Cart">
                </a>
                <a href="search.php" class="button">
                    <img src="./../img/search.webp" alt="Search">
                </a>
                <a href="account.php" class="button">
                    アカウント
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../img/gamesoya home pic.png" class="d-block w-100" alt="...">
                </div>
            </div>
            </button>
        </div>
    </div>
    <div class="container">
        <fieldset>
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6 mb-3">
                <div>
                    <?php
                    $sql = $pdo->prepare('select * from game where game_genre = "action"');
                    $sql->execute();
                    foreach ($sql as $row) {
                        echo "<img src='./../manager/", $row['game_icon'], "' alt='ゲーム画像' width='100'>";
                        echo $row['game_name'];
                    }
                    ?>
                </div>
            </div>
        </fieldset>
    </div>
</body>

</html>