<?php require('./dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
    <body>
        <h2>Practice</h2>
        <pre>
            <?php
                $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC');
            ?>
            <article>
                <?php while ($memo = $memos->fetch()): ?>
                    <p><a href="#"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
                    <time><?php print($memo['created_at']); ?></time>
                <hr>
                <?php endwhile; ?>
            </article>
        </pre>
    </body>
</html>

