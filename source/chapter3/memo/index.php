<?php require('./dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <body>
        <h2>Practice</h2>
        <pre>
            <?php
                $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC');
            ?>
        </pre>
    </body>
</html>

