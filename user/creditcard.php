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
        <button class='back-btn' onclick='window.history.back();'></button>
        <img src='./../img/GAMESoya.PNG' height="80px">
    </header>
    <main>
    <form action="destroy_card.php" type="post">
        <h1>カード情報</h1>
            カード番号<br>
        <input type=text name=card_id placeholder="0000 0000 0000 000" style="width:300px;height:20px"><br>
            有効期限<br>
        <input type=textbox name=card_month placeholder=MM style="width:300px;height:20px">
        <input type=textbox name=card_year placeholder=YY style="width:300px;height:20px"><br>
            カード名義<br>
        <input type=textbox name=card_name style="width:300px;height:20px"><br>
            セキュリティコード<br>
        <input type=text name=security style="width:300px;height:20px"><br>

        <input type=submit value=登録 class="account_btn">
    </form>
    </main>
</body>

</html>