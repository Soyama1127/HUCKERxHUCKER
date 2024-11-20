<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>新規登録完了</title>
</head>

<body>
    <main>
        <img height="80px" src="./../img/GAMESoya.PNG"><br><br>
        <?php
        $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
        $name = $_POST['user_name'];
        $id = $_POST['login_id'];
        $password = $_POST['pass'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = $pdo->prepare('insert into user(user_id,user_name,user_password) values(?,?,?)');
        $sql->execute([$id, $name, $hashedPassword]);
        ?>
        <form action="login.php" method="post">
            <h1>登録完了しました</h1>
            <input type=submit value=ログイン画面に戻る class="user_button">
        </form>
    </main>
</body>

</html>