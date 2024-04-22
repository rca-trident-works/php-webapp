<?php
for ($i = 0; $i <= 365; $i++) {
    $day = date('n/j', strtotime('+'. $i . 'day'));
    print $day . "<br>";
}
?>
