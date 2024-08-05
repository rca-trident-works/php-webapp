<?php
// 今日の日付を取得
$today = date("Y年m月d日");

// 0から4までの乱数を生成
$fortuneIndex = rand(0, 4);

// 数字と運勢および画像ファイル名を関連付けた連想配列を定義
$fortuneMap = [
    0 => ["label" => "大吉", "image" => "images/omikuji-daikichi.png"],
    1 => ["label" => "吉", "image" => "images/omikuji-kichi.png"],
    2 => ["label" => "中吉", "image" => "images/omikuji-chukichi.png"],
    3 => ["label" => "凶", "image" => "images/omikuji-kyo.png"],
    4 => ["label" => "大凶", "image" => "images/omikuji-daikyo.png"]
];

// メッセージと画像を2行で表示
echo "あなたの{$today}の運勢は" . $fortuneMap[$fortuneIndex]["label"] . "です．<br><img src='" . $fortuneMap[$fortuneIndex]["image"] . "' alt='" . $fortuneMap[$fortuneIndex]["label"] . "' />";
