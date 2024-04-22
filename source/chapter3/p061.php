<?php
$i = 0;
while($i <= 365) {
    $day = date('n/j', strtotime('+'. $i . 'day'));
    print $day . "<br>";
    $i++;
}
