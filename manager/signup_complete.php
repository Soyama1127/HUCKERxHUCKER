<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>管理者登録完了</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
    <?php
    $id = $_POST['manager_id'];
    $password = $_POST['manager_password'];
    $name = $_POST['manager_name'];
    $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
    $sql = $pdo->prepare('insert into manager(manager_id,manager_password,manager_name) values(?,?,?)');
    $sql->execute([$id, $password,$name]);
    ?>
    <form action="login.php" method="post">
    <h1>登録完了しました</h1>
    <input type=submit value=完了>
</form> 
    </main>
</body>


</html>