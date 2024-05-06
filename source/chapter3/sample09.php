<?php
$fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];
print($fruits['lemon']);
foreach ($fruits as $key => $value) {
    print($key.":".$value);
}
?>
