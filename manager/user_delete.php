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
    <h1>ユーザー削除</h1>
    
    <main>
    <form action="user_delete_complete.php" method="post">
    番号<input type="number" name="user_name" value="1"><br>
        <input  type="submit" value="削除"style="width:300px;height:50px">
    </form>
    </main>
</body>

</html>