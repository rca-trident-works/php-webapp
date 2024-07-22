<?php require('./dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<body>
    <h2>Practice</h2>
    <?php
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
        $memos->execute(array($id));
        $memo = $memos->fetch();
    }
    ?>
    <form action="update_do.php" method="post">
        <textarea name="memo" cols="50" rows="10"><?php print($memo['memo']); ?></textarea><br>
        <button type="submit">登録する</button>
        <article>
            <pre><?php print($memo['memo']); ?></pre>
        </article>
</body>
