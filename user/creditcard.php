<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>カード情報</title>
</head>

<body>
    <header>
        <button class='back-btn' onclick="location.href='home.php'">＜</button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main class="credit_main">
        <form action="update_card.php" type="post" class="credit_form">
            <h1>カード情報</h1>
            <label>カード番号</label>
            <input type=text name=card_id placeholder="0000 0000 0000 000" class="credit_text"><br>
            <label>有効期限</label>
            <div>
                <input type=text name=card_month placeholder=MM class="minitext">
                <input type=text name=card_year placeholder=YY class="minitext">
            </div><br>
            <label>カード名義</label>
            <input type=text name=card_name class="credit_text"><br>
            <label>セキュリティコード</label>
            <input type=text name=security class="minitext"><br>

            <input type=submit value=登録 class="card_entry">
        </form>
    </main>
</body>

</html>