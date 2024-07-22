<?php require('./dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <body>
        <h2>Practice</h2>
        <pre>
            <?php
                $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
                $statement -> execute(array($_POST['memo']));
                echo 'メモが登録されました';
            ?>
        </pre>
    </body>
</html>

