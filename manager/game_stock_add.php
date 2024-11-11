<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>在庫補充画面</title>
</head>
<body>
    <header>
        GAMESoya管理者
    </header>
    <main>
        <table border="2" id="stockTable" class="tablesorter">
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
                <?php
                try {
                    // データベース接続設定
                    $pdo = new PDO(
                        'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553864-gamesoya;', 'LAA1553864', 'Pass1127'
                    );
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // クエリを実行し、結果をテーブル行として出力
                    foreach ($pdo->query('SELECT * FROM class_info') as $row) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row['game_id']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['game_name']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['game_genre']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['game_model']) . '</td>';
                        echo '<td>' . number_format($row['game_stock']) . '</td>';
                        echo '</tr>';
                    }
                } catch (PDOException $e) {
                    echo 'データベース接続エラー: ' . htmlspecialchars($e->getMessage());
                }
                ?>
            </tbody>
        </table>
    </main>
    <script src="./../js/manager.js"></script>
</body>
</html>