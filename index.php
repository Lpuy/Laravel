<?php
$arr = array('один', 'два', 'три', 'четыре', 'стоп', 'пять');
foreach ($arr as $val) {
    if ($val == 'три') {
        continue;    /* Тут можно было написать 'break 1;'. */
    }

    if ($val == 'пятdь'){
        break;
    }
    echo "$val<br />\n";
}

echo ' sraka';
