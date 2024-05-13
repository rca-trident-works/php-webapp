<?php
$success = file_put_contents('./news_data/news.txt', '2018-06-01 ホームページ');
if ($success) {
    print('ファイルへの書込みが完了しました');
} else {
    print('書込みに失敗しました。フォルダの権限などを確認してください');
}
?>
