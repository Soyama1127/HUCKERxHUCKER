<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>新規登録完了</title>
</head>

<body>
    <header class="login_header">
        <img src="./../img/GAMESoya.PNG" class="gamesoya_logo">
    </header>
    <main>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $name = $_POST['user_name'];
        $id = $_POST['login_id'];
        $password = $_POST['pass'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = $pdo->prepare('insert into user(login_id,user_name,user_password) values(?,?,?)');
        $sql->execute([$id, $name, $hashedPassword]);

        $sql = $pdo->prepare("insert into creditcard (user_id, card_number, date_month, date_year, card_name, security_card) VALUES (?, '', '', '', '', '')");
        $sql->execute([$id]);
        ?>
        <form action="login.php" method="post" class="signup_complete_form">
            <div>
                <h1 class="login_label">登録完了しました</h1>
                <input type=submit value=ログイン画面に戻る class="user_button">
            </div>
        </form>
    </main>
</body>

</html>