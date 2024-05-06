<?php
if (date('G') < 9) {
    print("※現在受付時間外です\n");
} else {
    print("ようこそ\n");
}
$x = '';
if ($x) {
    print("xには文字が入っています\n");
}
$x = 0;
if (!$x) {
    print("xは0です\n");
}
?>
