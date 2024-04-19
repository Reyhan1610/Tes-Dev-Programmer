<?php

$array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

usort($array, function($a, $b) {
    if (is_numeric($a) && !is_numeric($b)) {
        return 1;
    } elseif (!is_numeric($a) && is_numeric($b)) {
        return -1;
    } else {
        return strnatcasecmp($a, $b);
    }
});

print_r($array);

?>
