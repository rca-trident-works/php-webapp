<?php require('./dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<body>
    <h2>Practice</h2>
    <?php
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $statement = $db->prepare('DELETE FROM memos WHERE id=?');
        $statement->execute(array($id));
    }
    ?>

        <pre>
        <p>メモを削除しました</p>
        </pre>
        <p><a href="index.php">戻る</a></p>
</body>
