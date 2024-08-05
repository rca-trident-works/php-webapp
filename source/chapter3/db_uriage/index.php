<?php require('./dbconnect.php') ?>
<!-- 商品一覧ページ -->

<!DOCTYPE html>
<html lang="ja">

<body>
    <h2>商品一覧</h2>
    <table>
        <thead>
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th />
                <th />
            </tr>
        </thead>
        <tbody>
            <?php
            $goods = $db->query('SELECT * FROM goods');
            foreach ($goods as $good) {
            ?>
                <tr>
                    <td><?php print($good['id']) ?></td>
                    <td><?php print($good['name']) ?></td>
                    <td><a href="edit.php?id=<?php print($good['id']) ?>">編集</a></td>
                    <td><a href="delete.php?id=<?php print($good['id']) ?>">削除</a></td>
                </tr>
            <?php
            }
            ?>
    </table>
</body>

</html>
