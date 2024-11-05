<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/manager.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
    
    <title>在庫補充画面</title>
</head>

<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <table id="stockTable" class="tablesorter">
            <thead>
                <tr>
                    <th>商品ID</th>
                    <th>商品名</th>
                    <th>ジャンル</th>
                    <th>機種</th>
                    <th>在庫数</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>太郎の大冒険</td>
                    <td>RPG</td>
                    <td>PS</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>タロドラ</td>
                    <td>パズル</td>
                    <td>switch</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>ぼいぼい</td>
                    <td>スポーツ</td>
                    <td>wii</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>tarobrothers</td>
                    <td>アクション</td>
                    <td>64</td>
                    <td>57</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>tarobrothers</td>
                    <td>アクション</td>
                    <td>wii</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
    </main>
    <script src="./../js/manager.js"></script>
</body>

</html>