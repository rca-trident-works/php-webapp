<!DOCTYPE html>
<head>
    <title>よくわかるPHPの教科書</title>
</head>
<body>
    <header>
        <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
    </header>

    <main>
        <h2>メモ一覧</h2>
        <pre>
            <?php
                try {
                    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
                } catch (PDOException $e) {
                    echo 'DB接続エラー：' . $e->getMessage();
                }
                $count = @$db->exec(`INSERT INTO my_items SET maker_id=1, item_name='もも', price=210, keyword='缶詰,ピンク,甘い', sales=0, created='2018-01-23', updated='2018-01-23'`);
                echo $count . '件のデータを挿入しました';

                $records = $db->query('SELECT * FROM my_items');
                while ($record = $records->fetch()) {
                    print($record['item_name'] . "\n");
                }
            ?>
        </pre>
    </main>
</body>
</html>

