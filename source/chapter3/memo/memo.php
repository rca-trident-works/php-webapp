<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <body>
        <h2>Practice</h2>
        <pre>
            <?php
                $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
                $memos->execute(array($_REQUEST['id']));
                $memo = $memos->fetch();
            ?>
        </pre>
    </body>
