<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <title>ユーザー削除</title>
</head>

<body>
    <header>
        GAMESOYA管理者
    </header>
    <main>
        <h1>ユーザー削除</h1>
        <?php
            $pdo = new PDO('mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127');
            echo '<form action="user_delete_complete.php" method="post">';
            echo "番号",'<input type="number" id="user_id" name="user_id" value="10" />';
            $sql = $pdo->query('select  * from user');
            $sql->execute();
            foreach ($sql as $row){
                echo '<p>';
                echo $row['user_id'];
                echo $row['user_name'];
                echo '</p>';
            }
            echo '<input type="submit" value="削除" class="manager_button">';
        ?>
        </form>
    </main>
        <script src="./../js/manager.js"></script>
</body>

</html>